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

class ForumController extends AbstractController
{
    #[Route('/forums', name: 'app_forums')]
    public function index(Request $request, EntityManagerInterface $em): Response
    {
        $search = $request->query->get('search');
        $category = $request->query->get('category');
        
        $query = $em->getRepository(Forum::class)->createQueryBuilder('f')
            ->leftJoin('f.user', 'u')
            ->addSelect('u');
    
        if ($search) {
            $query->where('LOWER(f.description) LIKE LOWER(:search) OR LOWER(f.categorie) LIKE LOWER(:search)')
                  ->setParameter('search', '%'.$search.'%');
        }
        
        if ($category) {
            $query->andWhere('f.categorie = :category')
                  ->setParameter('category', $category);
        }
        
        $forums = $query->orderBy('f.date', 'DESC')->getQuery()->getResult();
    
        return $this->render('forums/forums.html.twig', [
            'forums' => $forums,
            'search' => $search,
            'current_category' => $category
        ]);
    }
    #[Route('/add', name: 'app_forums_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager, SessionInterface $session): Response
    {
        $forum = new Forum();
        $form = $this->createForm(ForumType::class, $forum);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            /** @var UploadedFile $imageFile */
            $imageFile = $form->get('imageFile')->getData();

            if ($imageFile && in_array($imageFile->getMimeType(), ['image/jpeg', 'image/png'])) {
                if ($imageFile->getSize() < 5 * 500 * 500) {
                    $imageId = 'img_' . uniqid();
                    $forum->setImg($imageId);
                    $session->set('forum_image_' . $imageId, [
                        'data' => base64_encode(file_get_contents($imageFile->getPathname())),
                        'mime' => $imageFile->getMimeType()
                    ]);
                } else {
                    $this->addFlash('error', 'L\'image est trop grande (max 5MB)');
                }
            } else {
                $forum->setImg('default');
            }

            $entityManager->persist($forum);
            $entityManager->flush();

            $this->addFlash('success', 'Forum créé avec succès !');
            return $this->redirectToRoute('app_forums');
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
}
