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


use Symfony\Contracts\HttpClient\HttpClientInterface;
use App\Service\AutoCompleteService;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use App\Entity\User;
use Symfony\Component\Process\Process;
use Symfony\Component\Process\Exception\ProcessFailedException;
use Symfony\Component\Notifier\Notification\Notification;
use Symfony\Component\Notifier\NotifierInterface;  
>>>>>>> GestionForum
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

#[Route('/comment/add/{forumId}', name: 'app_comment_add', methods: ['POST'])]
public function addComment(
    Request $request,
    EntityManagerInterface $entityManager,
    int $forumId,
    ValidatorInterface $validator,
    SessionInterface $session,
    HttpClientInterface $httpClient,
    NotifierInterface $notifier // ✅ Injecté ici (facultatif, voir plus bas)
): RedirectResponse {
    
    $content = $request->request->get('comment_content', '');

    // Vérification des mots interdits avec API PurgoMalum
    try {
        $response = $httpClient->request(
            'GET',
            'https://www.purgomalum.com/service/containsprofanity?text='.urlencode($content)
        );
        
        if ($response->getContent() === 'true') {
            // Récupération de la version censurée
            $censoredResponse = $httpClient->request(
                'GET',
                'https://www.purgomalum.com/service/json?text='.urlencode($content)
            );
            $censoredData = $censoredResponse->toArray();
            
            $request->getSession()->set('comment_errors_'.$forumId, [
                'Votre commentaire contient des mots interdits. Version corrigée: '.$censoredData['result']
            ]);
            $request->getSession()->set('comment_content_'.$forumId, $censoredData['result']);
            
            return $this->redirectToRoute('app_forums', ['openForum' => $forumId]);
        }
    } catch (\Exception $e) {
        // Log l'erreur mais continue sans bloquer
        error_log('Erreur API badwords: '.$e->getMessage());
    }
    
    // Validation standard
    $comment = new Comment();
    $comment->setSujet($content);
    $comment->setDate(new \DateTime());
    $comment->setNbComment(0);
    $errors = $validator->validate($comment);
    if (count($errors) > 0) {
        $errorMessages = [];
        foreach ($errors as $error) {
            $errorMessages[] = $error->getMessage();
        }
        $request->getSession()->set('comment_errors_'.$forumId, $errorMessages);
        return $this->redirectToRoute('app_forums', ['openForum' => $forumId]);
    }
    
    // Association avec le forum
    $forum = $entityManager->getRepository(Forum::class)->find($forumId);
    if (!$forum) {
        $this->addFlash('error', 'Forum introuvable');
        return $this->redirectToRoute('app_forums');
    }
    $comment->setForum($forum);
    
    // Association avec l'utilisateur
    $userId = $session->get('user_id');
    if (!$userId) {
        $this->addFlash('error', 'Utilisateur non connecté');
        return $this->redirectToRoute('app_forums');
    }
    $user = $this->rechercheUserC($userId, $entityManager);
    if (!$user) {
        $this->addFlash('error', 'Utilisateur introuvable');
        return $this->redirectToRoute('app_forums');
    }
    $comment->setUser($user);
    
    // Enregistrement
    $entityManager->persist($comment);
    $entityManager->flush();
    
    // Nettoyage de la session
    $request->getSession()->remove('comment_errors_'.$forumId);
    $request->getSession()->remove('comment_content_'.$forumId);

    // ✅ Notification 1 : Interne (en session)
   
   

    $this->addFlash('success', 'Votre commentaire a été ajouté avec succès !');
    return $this->redirectToRoute('app_forums', ['openForum' => $forumId]);
}




    #[Route('/comment/delete/{id}', name: 'comment_delete', methods: ['POST'])]
    public function delete(
        Request $request, 
        Comment $comment, 
        EntityManagerInterface $entityManager,
        SessionInterface $session
    ): Response {
        // Vérification de l'utilisateur
        $currentUserId = $session->get('user_id');
        if (!$currentUserId || !$comment->getUser() || $comment->getUser()->getId() !== $currentUserId) {
            $this->addFlash('error', 'You are not authorized to delete this comment');
            return $this->redirectToRoute('app_forums');
        }
    
        // Vérification CSRF
        if (!$this->isCsrfTokenValid('delete-comment'.$comment->getIdCmn(), $request->request->get('_token'))) {
            $this->addFlash('error', 'Invalid CSRF token');
            return $this->redirectToRoute('app_forums');
        }
    
        $entityManager->remove($comment);
        $entityManager->flush();
    
        $this->addFlash('success', 'Comment deleted successfully');
        return $this->redirectToRoute('app_forums');
    }



 #[Route('/comment/edit/{id}', name: 'comment_edit', methods: ['POST'])]
 public function editComment(
     Request $request, 
     Comment $comment, 
     EntityManagerInterface $entityManager,
     SessionInterface $session
 ): Response {
     // Vérification de l'utilisateur
     $currentUserId = $session->get('user_id');
     if (!$currentUserId || !$comment->getUser() || $comment->getUser()->getId() !== $currentUserId) {
         if ($request->isXmlHttpRequest()) {
             return new JsonResponse(['status' => 'error', 'message' => 'Unauthorized'], 403);
         }
         $this->addFlash('error', 'You are not authorized to edit this comment');
         return $this->redirectToRoute('app_forums');
     }
 
     // Le reste de votre méthode existante...
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

    
    $this->addFlash('success', 'Commentaire mis à jour avec succès');
    return $this->redirectToRoute('app_forums');
}



private $httpClient;

    public function __construct(HttpClientInterface $httpClient)
    {
        $this->httpClient = $httpClient;
    }




   
#[Route('/api/autocomplete', name: 'comment_autocomplete', methods: ['POST'])]
public function autocomplete(Request $request, AutoCompleteService $autoComplete): JsonResponse
{
    $data = json_decode($request->getContent(), true);
    $text = $data['text'] ?? '';

    if (empty($text)) {
        return $this->json(['error' => 'Text is required', 'suggestions' => []], 400);
    }

    try {
        $suggestions = $autoComplete->getSuggestions($text);
        return $this->json(['suggestions' => $suggestions]);
    } catch (\Exception $e) {
        return $this->json(['error' => $e->getMessage(), 'suggestions' => []], 500);
    }
}



//analyze sentiment

#[Route('/api/sentiment', name: 'api_sentiment', methods: ['POST'])]
public function analyzeSentiment(Request $request, HttpClientInterface $httpClient)
{
    $data = json_decode($request->getContent(), true);
    
    if (empty(trim($data['comment'] ?? ''))) {
        return new JsonResponse([
            'status' => 'error',
            'message' => 'Comment content is required'
        ], 400);
    }
    
    $comment = trim($data['comment']);
    $prompt = "Analyze the user's sentiment through this sentence: \"{$comment}\"";
    $apiKey = 'AIzaSyBQD2yWHS3b5vAIpI8QIwYu4fg93m9Dd5k'; 
    
    try {
        $response = $httpClient->request('POST', 'https://generativelanguage.googleapis.com/v1beta/models/gemini-2.0-flash:generateContent', [
            'query' => ['key' => $apiKey],
            'json' => [
                'contents' => [
                    ['parts' => [['text' => $prompt]]]
                ]
            ]
        ]);
        
        $result = $response->toArray();
        $sentiment = $this->extractSentiment($result);
        
        return new JsonResponse([
            'status' => 'success',
            'result' => $sentiment,
        ]);
    } catch (\Exception $e) {
        return new JsonResponse([
            'status' => 'error',
            'message' => 'Error analyzing sentiment: ' . $e->getMessage()
        ], 500);
    }
}

private function extractSentiment(array $response): string
{
    $text = $response['candidates'][0]['content']['parts'][0]['text'] ?? '';
    
    if (stripos($text, 'positive') !== false) {
        return '😍'; // Emoji heureux
    } elseif (stripos($text, 'negative') !== false) {
        return '😞'; // Emoji triste
    } else {
        return '😐'; // Emoji neutre
    }
}











}
 


