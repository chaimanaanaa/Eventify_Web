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
    int $forumId,
    Security $security
): RedirectResponse {
    // Récupération du contenu du commentaire
    $content = trim($request->request->get('comment_content', ''));
    
    // Liste des mots interdits (à adapter selon vos besoins)
    $badwords = ['bad', 'shit', 'stupid', 'bitch', 'damn', 'merde', 'putain'];
    
    foreach ($badwords as $word) {
        if (stripos($content, $word) !== false) {
            $this->addFlash('error', 'Votre commentaire contient un mot interdit !');
            return $this->redirectToRoute('app_forums', ['openForum' => $forumId]);
        }
    }
    
    // Validation du contenu
    if (empty($content)) {
        $this->addFlash('error', 'Le commentaire ne peut pas être vide');
        return $this->redirectToRoute('app_forums', ['openForum' => $forumId]);
    }

    if (strlen($content) > 1000) {
        $this->addFlash('error', 'Le commentaire ne peut pas dépasser 1000 caractères');
        return $this->redirectToRoute('app_forums', ['openForum' => $forumId]);
    }

    // Récupération du forum
    $forum = $entityManager->getRepository(Forum::class)->find($forumId);
    if (!$forum) {
        $this->addFlash('error', 'Forum introuvable');
        return $this->redirectToRoute('app_forums');
    }

    // Création du commentaire
    $comment = new Comment();
    $comment->setSujet($content);
    $comment->setDate(new \DateTime());
    $comment->setForum($forum);

    // Association avec l'utilisateur connecté (si existant)
    
  
    $comment->setNbComment(0); // Initialisation explicite
   
    // Persistance en base de données
    $entityManager->persist($comment);
    $entityManager->flush();

    // Message de succès et redirection
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
public function editComment(Request $request, Comment $comment, EntityManagerInterface $entityManager): Response
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
