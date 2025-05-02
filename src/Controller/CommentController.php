<?php

namespace App\Controller;

use App\Entity\Comment;
use App\Entity\Forum;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\SecurityBundle\Security;
use Doctrine\DBAL\Connection;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Validator\Validator\ValidatorInterface;


use Symfony\Component\HttpFoundation\Session\SessionInterface;
use App\Entity\User;

class CommentController extends AbstractController
{


    private function rechercheUserC(int $id, EntityManagerInterface $entityManager): ?User   /**fonciton itlawej il user par id**/ 
{
return $entityManager->getRepository(User::class)->find($id);
}





    #[Route('/comment/add/{forumId}', name: 'app_comment_add', methods: ['POST'])]
    public function addComment(
        Request $request,
        EntityManagerInterface $entityManager,
        int $forumId,
        ValidatorInterface $validator,
        Security $security 
        , SessionInterface $session
    ): RedirectResponse {
           $content = $request->request->get('comment_content', '');
        
        // Création du commentaire pour validation
        $comment = new Comment();
        $comment->setSujet($content);
        $comment->setDate(new \DateTime());
        
        // Validation du commentaire
        $errors = $validator->validate($comment);
    
        // Vérification des mots interdits
        $badwords = ['bad', 'shit', 'stupid', 'bitch', 'damn', 'merde', 'putain'];
        foreach ($badwords as $word) {
            if (stripos($content, $word) !== false) {
                $request->getSession()->set('comment_errors_' . $forumId, ['Votre commentaire contient un mot interdit !']);
                return $this->redirectToRoute('app_forums', ['openForum' => $forumId]);
            }
        }
    
        // Si erreurs de validation (y compris champ vide)
        if (count($errors) > 0) {
            $errorMessages = [];
            foreach ($errors as $error) {
                $errorMessages[] = $error->getMessage();
            }
            
            $request->getSession()->set('comment_errors_' . $forumId, $errorMessages);
            $request->getSession()->set('comment_content_' . $forumId, $content);
            
            return $this->redirectToRoute('app_forums', ['openForum' => $forumId]);
        }
    
        // Récupération du forum
        $forum = $entityManager->getRepository(Forum::class)->find($forumId);
        if (!$forum) {
            $this->addFlash('error', 'Forum introuvable');
            return $this->redirectToRoute('app_forums');
        }
    
        // Configuration finale
        $comment->setForum($forum);
        $comment->setNbComment(0);






           // Récupérer l'ID de l'utilisateur connecté depuis la session
           $userId = $session->get('user_id');
           if (!$userId) {
            $this->addFlash('error', 'idUser introuvable');
            return $this->redirectToRoute('app_forums');
           }

           $user = $this->rechercheUserC($userId, $entityManager);

           if (!$user) {
            $this->addFlash('error', 'User introuvable');
            return $this->redirectToRoute('app_forums'); 
            }



            $comment->setUser($user);
        
        
        
    
        // Persistance
        $entityManager->persist($comment);
        $entityManager->flush();
    
        // Nettoyage session
        $request->getSession()->remove('comment_errors_' . $forumId);
        $request->getSession()->remove('comment_content_' . $forumId);
    
        $this->addFlash('success', 'Votre commentaire a été ajouté avec succès !');
        return $this->redirectToRoute('app_forums', ['openForum' => $forumId]);
    }



#[Route('/comment/delete/{id}', name: 'comment_delete', methods: ['POST'])]
public function delete(Request $request, Comment $comment, EntityManagerInterface $entityManager): Response
{
    if ($this->isCsrfTokenValid('delete-comment'.$comment->getIdCmn(), $request->request->get('_token'))) {
        $entityManager->remove($comment);
        $entityManager->flush();
    }

    return $this->redirectToRoute('app_forums');
}

/*#[Route('/comment/edit/{id}', name: 'comment_edit', methods: ['POST'])]
public function edit(Request $request, Comment $comment, EntityManagerInterface $entityManager): Response
{
    if ($this->isCsrfTokenValid('edit-comment'.$comment->getIdCmn(), $request->request->get('_token'))) {
        $content = $request->request->get('comment_content');
        if (!empty($content)) {
            $comment->setSujet($content);
            $entityManager->flush();
        }
    }

    return $this->redirectToRoute('app_forums');
}
 */

 #[Route('/comment/edit/{id}', name: 'comment_edit', methods: ['POST'])]
public function editComment(Request $request, Comment $comment, EntityManagerInterface $entityManager   , SessionInterface $session): Response
{
    // Validation CSRF
    if (!$this->isCsrfTokenValid('edit-comment' . $comment->getIdCmn(), $request->request->get('_token'))) {
        if ($request->isXmlHttpRequest()) {
            return new JsonResponse(['status' => 'error', 'message' => 'Token CSRF invalide'], 403);
        }
        $this->addFlash('error', 'Token CSRF invalide');
        return $this->redirectToRoute('app_forums');
    }

    // Validation du contenu
    $newContent = trim($request->request->get('content', ''));
    if (empty($newContent)) {
        if ($request->isXmlHttpRequest()) {
            return new JsonResponse(['status' => 'error', 'message' => 'Le commentaire ne peut pas être vide'], 400);
        }
        $this->addFlash('error', 'Le commentaire ne peut pas être vide');
        return $this->redirectToRoute('app_forums');
    }

    if (strlen($newContent) > 500) {
        if ($request->isXmlHttpRequest()) {
            return new JsonResponse(['status' => 'error', 'message' => 'Le commentaire ne peut pas dépasser 500 caractères'], 400);
        }
        $this->addFlash('error', 'Le commentaire ne peut pas dépasser 500 caractères');
        return $this->redirectToRoute('app_forums');
    }

    // Mise à jour du commentaire
    $comment->setSujet($newContent);


     // Récupérer l'ID de l'utilisateur connecté depuis la session
     $userId = $session->get('user_id');
     if (!$userId) {
      $this->addFlash('error', 'idUser introuvable');
      return $this->redirectToRoute('app_forums');
     }

     $user = $this->rechercheUserC($userId, $entityManager);

     if (!$user) {
      $this->addFlash('error', 'User introuvable');
      return $this->redirectToRoute('app_forums'); 
      }



    $entityManager->flush();

    // Si c'est une requête AJAX (comme dans votre cas actuel)
    if ($request->isXmlHttpRequest()) {
        return new JsonResponse([
            'status' => 'success',
            'message' => 'Commentaire mis à jour avec succès',
            'newContent' => $newContent
        ]);
    }

    // Si ce n'est pas une requête AJAX (soumission normale du formulaire)
    $this->addFlash('success', 'Commentaire mis à jour avec succès');
    return $this->redirectToRoute('app_forums');
}
 }
