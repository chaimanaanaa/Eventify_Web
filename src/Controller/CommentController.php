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

class CommentController extends AbstractController
{
    #[Route('/comment/add/{forumId}', name: 'app_comment_add', methods: ['POST'])]
public function addComment(
    Request $request,
    EntityManagerInterface $entityManager,
    int $forumId
): RedirectResponse  // Changez Response en RedirectResponse
{
    $content = $request->request->get('comment_content');
    
    if (empty($content)) {
        $this->addFlash('error', 'Le commentaire ne peut pas être vide');
        return $this->redirectToRoute('app_forums');
    }

    $comment = new Comment();
    $comment->setSujet($content);
    $comment->setDate(new \DateTime());
    $comment->setNbComment(1);

    $forum = $entityManager->getRepository(Forum::class)->find($forumId);
    $comment->setForum($forum);

    if ($this->getUser()) {
        $comment->setUser($this->getUser());
    }

    $entityManager->persist($comment);
    $entityManager->flush();

    $this->addFlash('success', 'Commentaire ajouté avec succès !');
    return $this->redirectToRoute('app_forums');
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
 public function editComment(Request $request, Comment $comment, EntityManagerInterface $entityManager): JsonResponse
 {
     // Validation CSRF
     if (!$this->isCsrfTokenValid('edit-comment' . $comment->getIdCmn(), $request->request->get('_token'))) {
         return new JsonResponse(['status' => 'error', 'message' => 'Token CSRF invalide'], 403);
     }
 
     // Validation du contenu
     $newContent = trim($request->request->get('content', ''));
     if (empty($newContent)) {
         return new JsonResponse(['status' => 'error', 'message' => 'Le commentaire ne peut pas être vide'], 400);
     }
 
     if (strlen($newContent) > 500) {
         return new JsonResponse(['status' => 'error', 'message' => 'Le commentaire ne peut pas dépasser 500 caractères'], 400);
     }
 
     // Mise à jour du commentaire
     $comment->setSujet($newContent);
     $entityManager->flush();
 
     return new JsonResponse([
         'status' => 'success',
         'message' => 'Commentaire mis à jour avec succès',
         'newContent' => $newContent // Important pour la mise à jour côté client
     ]);
 }
 }
