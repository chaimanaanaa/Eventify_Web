<?php

namespace App\Controller;

use App\Entity\Forum;
use App\Form\ForumType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Security\Csrf\CsrfToken;
use Symfony\Component\Security\Csrf\CsrfTokenManagerInterface;
use Doctrine\Persistence\ManagerRegistry;
use App\Service\PythonTranslator;
use Symfony\Component\Process\Process;
use Symfony\Component\Process\Exception\ProcessFailedException;
use Symfony\Component\Validator\Validator\ValidatorInterface;
use Symfony\Component\Form\FormError;

class ForumController extends AbstractController
{


    private $translator;

    public function __construct(PythonTranslator $translator)
{
    $this->translator = $translator;
}
    #[Route('/forums', name: 'app_forums', methods: ['GET'])]
    public function index(Request $request, EntityManagerInterface $em): Response
    {
        $searchTerm = $request->query->get('search');
        $category = $request->query->get('category');
        $sort = $request->query->get('sort', 'newest');
        $forumId = $request->query->get('show_forum');
    
        if ($forumId) {
            // Récupération directe par id_forum
            $forum = $em->getRepository(Forum::class)->findOneBy(['id_forum' => $forumId]);
            $forums = $forum ? [$forum] : [];
        } else {
            // Logique existante pour la liste des forums
            $query = $em->createQueryBuilder()
                ->select('f', 'r')
                ->from(Forum::class, 'f')
                ->leftJoin('f.reactions', 'r');
    
            if ($category) {
                $query->andWhere('f.categorie = :category')
                    ->setParameter('category', $category);
            }
    
            if ($searchTerm) {
                $query->andWhere('f.description LIKE :search OR f.categorie LIKE :search')
                    ->setParameter('search', '%'.$searchTerm.'%');
            }
    
            // Gestion des différents types de tri
            switch ($sort) {
                case 'oldest':
                    $query->orderBy('f.date', 'ASC');
                    break;
                case 'popular':
                    $query->addSelect('SUM(r.nblike) as HIDDEN likes')
                          ->groupBy('f.id_forum')
                          ->orderBy('likes', 'DESC');
                    break;
                case 'newest':
                default:
                    $query->orderBy('f.date', 'DESC');
                    break;
            }
    
            $forums = $query->getQuery()->getResult();
        }
        
        // Si c'est une requête AJAX, retourner uniquement le HTML nécessaire
        if ($request->isXmlHttpRequest()) {
            $html = $this->renderView('forums/forums.html.twig', [
                'forums' => $forums,
                'is_ajax_request' => true,
                'single_forum_mode' => (bool)$forumId
            ]);
            return new Response($html);
        }
    
        return $this->render('forums/forums.html.twig', [
            'forums' => $forums,
            'is_ajax_request' => false,
            'single_forum_mode' => (bool)$forumId
        ]);
    }
    #[Route('/add', name: 'app_forums_new', methods: ['GET', 'POST'])]
    public function new(
        Request $request, 
        EntityManagerInterface $entityManager,
        ValidatorInterface $validator,
        SessionInterface $session
    ): Response {
        $forum = new Forum();
        $form = $this->createForm(ForumType::class, $forum);
        $form->handleRequest($request);
    
        if ($form->isSubmitted()) {
            // Validation manuelle avec le Validator
            $errors = $validator->validate($forum);
            
            if (count($errors) > 0) {
                // Ajoute les erreurs au formulaire pour affichage dans le template
                foreach ($errors as $error) {
                    $field = $error->getPropertyPath();
                    $form->get($field)->addError(new FormError($error->getMessage()));
                }
            } else {
                // Traitement si validation OK
                $imageFile = $form->get('imageFile')->getData();
                if ($imageFile) {
                    $imageId = 'img_' . uniqid();
                    $forum->setImg($imageId);
                    $session->set('forum_image_' . $imageId, [
                        'data' => base64_encode(file_get_contents($imageFile->getPathname())),
                        'mime' => $imageFile->getMimeType()
                    ]);
                } else {
                    $forum->setImg('default');
                }
    
                $entityManager->persist($forum);
                $entityManager->flush();
    
                $this->addFlash('success', 'Forum créé avec succès !');
                return $this->redirectToRoute('app_forums');
            }
        }
    
        return $this->render('forums/addforum.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    #[Route('/forum/image/{id}', name: 'app_forum_image')]
    public function getImage(string $id, SessionInterface $session): Response
    {
        $imageData = $session->get('forum_image_' . $id);
        
        if (!$imageData) {
            return $this->file('public/images/default_forum.jpg');
        }

        return new Response(
            base64_decode($imageData['data']),
            200,
            ['Content-Type' => $imageData['mime']]
        );
    }

    #[Route('/forum/delete/{id}', name: 'app_forum_delete', methods: ['POST'])]
    public function delete(
        Forum $forum,
        EntityManagerInterface $em,
        Request $request,
        CsrfTokenManagerInterface $csrfTokenManager
    ): Response {
        // Vérification CSRF
        $submittedToken = $request->request->get('_token');
        
        if (!$csrfTokenManager->isTokenValid(new CsrfToken('delete-forum', $submittedToken))) {
            if ($request->isXmlHttpRequest()) {
                return $this->json([
                    'success' => false,
                    'message' => 'Token CSRF invalide'
                ], 403);
            }
            throw $this->createAccessDeniedException('Token CSRF invalide');
        }
    
        try {
            $em->remove($forum);
            $em->flush();
    
            if ($request->isXmlHttpRequest()) {
                return $this->json([
                    'success' => true
                ]);
            }
    
            $this->addFlash('success', 'Forum supprimé avec succès');
            return $this->redirectToRoute('app_forums');
    
        } catch (\Exception $e) {
            if ($request->isXmlHttpRequest()) {
                return $this->json([
                    'success' => false,
                    'message' => 'Erreur lors de la suppression'
                ], 500);
            }
            throw $this->createNotFoundException('Erreur lors de la suppression');
        }
    }




    #[Route('/edit', name: 'app_forum_edit', methods: ['GET', 'POST'])]
    public function edit(
        Request $request,
        EntityManagerInterface $em,
        SessionInterface $session
    ): Response {
        // Pour GET: récupérer l'ID depuis la requête
        // Pour POST: récupérer l'ID depuis le formulaire
        $id = $request->isMethod('POST') 
            ? $request->request->get('id') 
            : $request->query->get('id');
    
        if (!$id) {
            throw $this->createNotFoundException('No forum ID provided');
        }
    
        $forum = $em->getRepository(Forum::class)->find($id);
    
        if (!$forum) {
            throw $this->createNotFoundException('Forum not found');
        }
    
        $form = $this->createForm(ForumType::class, $forum);
        $form->handleRequest($request);
    
        if ($form->isSubmitted() && $form->isValid()) {
            $imageFile = $form->get('imageFile')->getData();
            
            if ($imageFile) {
                if ($forum->getImg() && $session->has('forum_image_' . $forum->getImg())) {
                    $session->remove('forum_image_' . $forum->getImg());
                }
                
                $imageId = 'img_' . uniqid();
                $forum->setImg($imageId);
                $session->set('forum_image_' . $imageId, [
                    'data' => base64_encode(file_get_contents($imageFile->getPathname())),
                    'mime' => $imageFile->getMimeType()
                ]);
            }
    
            $em->flush();
            $this->addFlash('success', 'Forum updated successfully!');
            return $this->redirectToRoute('app_forums');
        }
    
        return $this->render('forums/edit.html.twig', [
            'form' => $form->createView(),
            'forum' => $forum
        ]);
    }



  

public function list(Request $request, EntityManagerInterface $entityManager): Response
{
    // Récupérer les paramètres de requête
    $sort = $request->query->get('sort', 'newest');
    $category = $request->query->get('category');
    $search = $request->query->get('search');

    // Créer la requête de base
    $query = $entityManager->createQueryBuilder()
        ->select('f')
        ->from('App\Entity\Forum', 'f');

    // Appliquer les filtres
    if ($category) {
        $query->andWhere('f.categorie = :category')
            ->setParameter('category', $category);
    }

    if ($search) {
        $query->andWhere('f.description LIKE :search OR f.categorie LIKE :search')
            ->setParameter('search', '%'.$search.'%');
    }

    // Appliquer le tri
    switch ($sort) {
        case 'oldest':
            $query->orderBy('f.createdAt', 'ASC');
            break;
        case 'popular':
            $query->orderBy('f.likes', 'DESC'); // Supposant que vous avez un champ 'likes'
            break;
        case 'newest':
        default:
            $query->orderBy('f.createdAt', 'DESC');
            break;
    }

    // Exécuter la requête
    $forums = $query->getQuery()->getResult();

    return $this->render('forums/forums.html.twig', [
        'forums' => $forums,
    ]);
}

#[Route('/forum/traduire', name: 'app_traduire_texte')]
public function traduireTexte(Request $request)
{
    $texte = $request->query->get('texte');
    $langue = $request->query->get('langue');

    if (!$texte || !$langue) {
        return new JsonResponse(['error' => 'Texte ou langue manquants.'], 400);
    }

    // Préparer la commande avec encodage UTF-8 explicite
    $pythonScriptPath = 'C:\\Users\\MSI-PC\\Desktop\\traduction\\traduction.py';
    $process = new Process([
        'python', 
        '-X', 'utf8',  // Force l'UTF-8 pour Python
        $pythonScriptPath, 
        escapeshellarg($texte), 
        $langue
    ]);
    
    // Définir les variables d'environnement pour l'UTF-8
    $process->setEnv([
        'PYTHONIOENCODING' => 'utf-8',
        'LANG' => 'en_US.UTF-8',
        'LC_ALL' => 'en_US.UTF-8'
    ]);

    try {
        $process->mustRun();
        $result = $process->getOutput();

        if (empty($result)) {
            return new JsonResponse(['error' => 'Erreur dans la traduction.'], 500);
        }

        // Nettoyer et retourner le résultat
        $cleanResult = trim($result);
        return new JsonResponse([
            'traduction' => $cleanResult,
            'original' => $texte,
            'langue' => $langue
        ]);
    } catch (ProcessFailedException $exception) {
        return new JsonResponse([
            'error' => 'Erreur dans l\'exécution du script Python',
            'details' => $exception->getMessage()
        ], 500);
    }
}


#[Route('/forum/translate/{id}', name: 'forum_translate', methods: ['POST'])]
public function translateForum(int $id, Request $request, EntityManagerInterface $em): JsonResponse
{
    $forum = $em->getRepository(Forum::class)->find($id);
    
    if (!$forum) {
        return $this->json(['error' => 'Forum not found'], 404);
    }

    $data = json_decode($request->getContent(), true);
    $text = $data['text'] ?? $forum->getDescription();
    $targetLang = $data['targetLang'] ?? 'fr';

    try {
        // Appel direct à votre fonction de traduction
        $response = $this->traduireTexte(new Request([
            'texte' => $text,
            'langue' => $targetLang
        ]));

        // Si vous utilisez forward(), assurez-vous de bien parser la réponse
        $result = json_decode($response->getContent(), true);

        if (isset($result['error'])) {
            throw new \Exception($result['error']);
        }

        return $this->json([
            'translatedText' => $result['traduction'] ?? $text,
            'originalText' => $text,
            'targetLang' => $targetLang
        ]);

    } catch (\Exception $e) {
        return $this->json(['error' => 'Erreur de traduction: ' . $e->getMessage()], 500);
    }
}






}
