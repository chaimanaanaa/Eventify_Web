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
use Symfony\Component\HttpFoundation\RequestStack;

use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Symfony\Component\DependencyInjection\ParameterBag\ParameterBagInterface;
use Symfony\UX\Turbo\Broadcaster\BroadcasterInterface;

use App\Entity\User;


class ForumController extends AbstractController
{


    private $translator;

    private RequestStack $requestStack;
private function rechercheUserF(int $id, EntityManagerInterface $entityManager): ?User   /**fonciton itlawej il user par id**/ 
{
return $entityManager->getRepository(User::class)->find($id);
}

    public function __construct(PythonTranslator $translator , BroadcasterInterface $broadcaster , RequestStack $requestStack)
{
    $this->translator = $translator;
    $this->broadcaster = $broadcaster;
    $this->requestStack = $requestStack;
}
private function getSession()
{
    return $this->requestStack->getSession();
}

#[Route('/forums', name: 'app_forums', methods: ['GET'])]
public function index(Request $request, EntityManagerInterface $em): Response
{
    $searchTerm = $request->query->get('search');
    $category = $request->query->get('category');
    $sort = $request->query->get('sort', 'newest');
    $forumId = $request->query->get('show_forum');
    $isAjax = $request->query->get('ajax') || $request->isXmlHttpRequest();

    if ($forumId) {
        $forum = $em->getRepository(Forum::class)->findOneBy(['id_forum' => $forumId]);
        $forums = $forum ? [$forum] : [];
    } else {
        $query = $em->createQueryBuilder()
            ->select('f', 'r', 'u', 'c', 'cu')
            ->from(Forum::class, 'f')
            ->leftJoin('f.reactions', 'r')
            ->leftJoin('f.user', 'u')
            ->leftJoin('f.comments', 'c')
            ->leftJoin('c.user', 'cu');

            
        if ($category) {
            $query->andWhere('f.categorie = :category')
                ->setParameter('category', $category);
        }

        if ($searchTerm) {
            $query->andWhere('f.description LIKE :search OR f.categorie LIKE :search')
                ->setParameter('search', '%'.$searchTerm.'%');
        }

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
        
        
    if ($isAjax) {
        return $this->render('forums/forums.html.twig', [
            'forums' => $forums,
            'is_ajax_request' => true,
            'single_forum_mode' => (bool)$forumId,
            'session' => $request->getSession(),
            'only_list' => true // Nouveau paramètre
        ]);
    }

    return $this->render('forums/forums.html.twig', [
        'forums' => $forums,
        'is_ajax_request' => false,
        'single_forum_mode' => (bool)$forumId,
        'session' => $request->getSession(),
        'only_list' => false
    ]);
}

    #[Route('/add', name: 'app_forums_new', methods: ['GET', 'POST'])]
    public function new(
        Request $request, 
        EntityManagerInterface $entityManager,
        ValidatorInterface $validator,
        ParameterBagInterface $params,
        SessionInterface $session
    ): Response {
        $forum = new Forum();
        $form = $this->createForm(ForumType::class, $forum);
        $form->handleRequest($request);
    
        if ($form->isSubmitted()) {
            $errors = $validator->validate($forum);
            
            if (count($errors) > 0) {
                // Gestion des erreurs de validation
                foreach ($errors as $error) {
                    $this->addFlash('error', $error->getMessage());
                }
            } else {
                // Gestion de l'image
                $imageFile = $form->get('imageFile')->getData();
                if ($imageFile) {
                    $uploadDirectory = $params->get('image_Forum');
                    $newFilename = 'img_' . uniqid() . '.' . $imageFile->guessExtension();
                    
                    try {
                        $imageFile->move(
                            $uploadDirectory,
                            $newFilename
                        );
                        $forum->setImg($newFilename);
                    } catch (FileException $e) {
                        $this->addFlash('error', 'Une erreur est survenue lors du téléchargement de l\'image');
                        return $this->redirectToRoute('app_forums_new');
                    }
                } else {
                    $forum->setImg('default.jpg');
                }
    
                // Gestion de l'anonymat
                $isAnonymous = $request->request->get('anonymous') === 'on';
                
                if (!$isAnonymous) {
                    // Si pas anonyme, associer l'utilisateur
                    $userId = $session->get('user_id');
                    if (!$userId) {
                        $this->addFlash('error', 'Vous devez être connecté pour poster non anonymement');
                        return $this->redirectToRoute('app_forums_new');
                    }
    
                    $user = $this->rechercheUserF($userId, $entityManager);
                    if (!$user) {
                        $this->addFlash('error', 'Utilisateur non trouvé');
                        return $this->redirectToRoute('app_forums_new');
                    }
                    $forum->setUser($user);
                } else {
                    // Si anonyme, ne pas associer d'utilisateur
                    $forum->setUser(null);
                }
    
                // Enregistrement
                $entityManager->persist($forum);
                $entityManager->flush();
                $this->logHistory('create', $forum);
                $this->addFlash('success', 'Forum créé avec succès !');
                return $this->redirectToRoute('app_forums');
            }
        }
    
        return $this->render('forums/addforum.html.twig', [
            'form' => $form->createView(),
        ]);
    }
    
    #[Route('/forum/image/{id}', name: 'app_forum_image')]
    public function getImage(string $id, ParameterBagInterface $params): Response
    {
        $imageDirectory = $params->get('image_Forum');
        $imagePath = $imageDirectory . '/' . $id;
        
        if (!file_exists($imagePath) || $id === 'default') {
            return $this->file('public/images/default_forum.jpg');
        }
    
        return $this->file($imagePath);
    }



    
    #[Route('/forum/delete/{id}', name: 'app_forum_delete', methods: ['POST'])]
public function delete(
    Forum $forum,
    EntityManagerInterface $em,
    Request $request,
    CsrfTokenManagerInterface $csrfTokenManager,
    SessionInterface $session
): Response {
    // Vérification de l'utilisateur
    $currentUserId = $session->get('user_id');
    $currentUserRole = $session->get('user_role'); // Supposons que vous stockez le rôle dans la session
    
    // Autoriser si l'utilisateur est admin OU s'il est propriétaire du forum
    $isAdmin = $currentUserRole === 'ROLE_ADMIN'; // Adaptez selon vos rôles
    $isOwner = $forum->getUser() && $forum->getUser()->getId() === $currentUserId;
    
    if (!$isAdmin && !$isOwner) {
        if ($request->isXmlHttpRequest()) {
            return $this->json([
                'success' => false,
                'message' => 'Accès refusé'
            ], 403);
        }
        throw $this->createAccessDeniedException('Vous ne pouvez pas supprimer ce forum');
    }

    // Vérification du token CSRF
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
        $this->logHistory('delete', $forum);
        $em->remove($forum);
        $em->flush();

        if ($request->isXmlHttpRequest()) {
            return $this->json(['success' => true]);
        }

        $this->addFlash('success', 'Forum supprimé avec succès');
        return $this->redirectToRoute('app_forums');

    } catch (\Exception $e) {
        if ($request->isXmlHttpRequest()) {
            return $this->json([
                'success' => false,
                'message' => 'Erreur lors de la suppression: '.$e->getMessage()
            ], 500);
        }
        $this->addFlash('error', 'Erreur lors de la suppression');
        return $this->redirectToRoute('app_forums');
    }
}





    
#[Route('/edit', name: 'app_forum_edit', methods: ['GET', 'POST'])]
public function edit(
    Request $request, 
    EntityManagerInterface $entityManager,
    ValidatorInterface $validator,
    ParameterBagInterface $params,
    SessionInterface $session
): Response {
    // Récupération de l'ID
    $id = $request->isMethod('POST') 
        ? $request->request->get('id') 
        : $request->query->get('id');

    if (!$id) {
        throw $this->createNotFoundException('Aucun ID de forum fourni');
    }

    // Récupération du forum
    $forum = $entityManager->getRepository(Forum::class)->find($id);
    if (!$forum) {
        throw $this->createNotFoundException('Forum non trouvé');
    }

    // Vérification de l'utilisateur
    $currentUserId = $session->get('user_id');
    if (!$currentUserId || !$forum->getUser() || $forum->getUser()->getId() !== $currentUserId) {
        throw $this->createAccessDeniedException('Vous ne pouvez pas modifier ce forum');
    }

    // Gestion de l'image
    $oldImage = $forum->getImg();
    $imageDirectory = $params->get('image_Forum');

    // Création du formulaire
    $form = $this->createForm(ForumType::class, $forum);
    $form->handleRequest($request);

    if ($form->isSubmitted() && $form->isValid()) {
        // Gestion de l'image
        $imageFile = $form->get('imageFile')->getData();
        
        if ($imageFile) {
            // Suppression de l'ancienne image si elle existe
            if ($oldImage && $oldImage !== 'default.jpg') {
                $oldImagePath = $imageDirectory.'/'.$oldImage;
                if (file_exists($oldImagePath)) {
                    unlink($oldImagePath);
                }
            }

            // Création du nouveau nom de fichier
            $newFilename = 'img_'.uniqid().'.'.$imageFile->guessExtension();
            
            try {
                $imageFile->move($imageDirectory, $newFilename);
                $forum->setImg($newFilename);
            } catch (FileException $e) {
                $this->addFlash('error', 'Erreur lors de l\'enregistrement de l\'image');
            }
        }

        // Mise à jour de l'utilisateur (au cas où)
        $user = $this->rechercheUserF($currentUserId, $entityManager);
        if ($user) {
            $forum->setUser($user);
        }

        // Sauvegarde
        $entityManager->flush();
        $this->logHistory('update', $forum);
        $this->addFlash('success', 'Forum mis à jour avec succès !');
        return $this->redirectToRoute('app_forums');
    }

    return $this->render('forums/edit.html.twig', [
        'form' => $form->createView(),
        'forum' => $forum
    ]);
}
    


//historique
   
private BroadcasterInterface $broadcaster;
private function initHistorySession(): void
{
    $session = $this->getSession();
    if (!$session->has('persistent_history')) {
        $session->set('persistent_history', []);
    }
}

private function logHistory(string $action, Forum $forum): void
{
    $this->initHistorySession();
    $session = $this->getSession();
    
    try {
        $user = $forum->getUser();
        $userName = $user ? ($user->getFirstName() ?? $user->getEmail() ?? 'Utilisateur #'.$user->getId()) : 'Anonyme';

        // Définir les détails selon l'action
        $actionDetails = [
            'create' => ['icon' => 'plus-circle', 'color' => 'success', 'label' => 'Création'],
            'update' => ['icon' => 'edit', 'color' => 'warning', 'label' => 'Modification'], 
            'delete' => ['icon' => 'trash', 'color' => 'danger', 'label' => 'Suppression']
        ];

        $details = $actionDetails[$action] ?? ['icon' => 'info-circle', 'color' => 'primary', 'label' => $action];

        $historyItem = [
            'action' => $action,
            'entity' => 'Forum',
            'id' => $forum->getId(),
            'time' => date('H:i:s'),
            'title' => $forum->getCategorie(),
            'user' => $userName,
            'icon' => $details['icon'],
            'color' => $details['color'],
            'label' => $details['label']
        ];

        // Ajouter à l'historique persistant
        $persistentHistory = $session->get('persistent_history', []);
        $persistentHistory[] = $historyItem;
        
        // Garder seulement les 20 dernières actions
        $persistentHistory = array_slice($persistentHistory, -20);
        $session->set('persistent_history', $persistentHistory);

        // Ajouter aussi aux flashes pour l'affichage immédiat
        $this->addFlash('history', $historyItem);

    } catch (\Exception $e) {
        error_log('Erreur historique: '.$e->getMessage());
    }
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

//traduction

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

private function getCurrentUser(EntityManagerInterface $em, SessionInterface $session): ?User
{
    $userId = $session->get('user_id');
    if (!$userId) {
        return null;
    }
    
    return $em->getRepository(User::class)->find($userId);
}




}
