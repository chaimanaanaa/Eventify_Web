<?php
// src/Controller/ReactionController.php
namespace App\Controller;

use App\Entity\Reaction;
use App\Entity\Forum;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/reaction')]
class ReactionController extends AbstractController
{
    public function __construct(
        private EntityManagerInterface $em
    ) {}

    #[Route('/like/{id}', name: 'reaction_like', methods: ['POST'])]
    public function like(Forum $forum, Request $request): JsonResponse
    {
        $reaction = $this->getReaction($forum);
        
        if ($reaction->getLikee() === 1) {
            // Si déjà liké, on ne fait rien
            return $this->jsonResponse($reaction);
        }
        
        // Reset dislike si existant
        if ($reaction->getDislike() === 1) {

            $reaction->setDislike(dislike: 0)

                     ->setNbdislike(max(0, $reaction->getNbdislike() - 1));
        }
        
        // Ajout like
        $reaction->setLikee(1)
                 ->setNblike($reaction->getNblike() + 1);
        
        $this->em->flush();
        
        return $this->jsonResponse($reaction);
    }

    #[Route('/dislike/{id}', name: 'reaction_dislike', methods: ['POST'])]
    public function dislike(Forum $forum, Request $request): JsonResponse
    {
        $reaction = $this->getReaction($forum);
        
        if ($reaction->getDislike() === 1) {
            // Si déjà disliké, on ne fait rien
            return $this->jsonResponse($reaction);
        }
        
        // Reset like si existant
        if ($reaction->getLikee() === 1) {
            $reaction->setLikee(0)
                     ->setNblike(max(0, $reaction->getNblike() - 1));
        }
        
        // Ajout dislike
        $reaction->setDislike(1)
                 ->setNbdislike($reaction->getNbdislike() + 1);
        
        $this->em->flush();
        
        return $this->jsonResponse($reaction);
    }

    private function getReaction(Forum $forum): Reaction
    {
        $reaction = $this->em->getRepository(Reaction::class)
            ->findOneBy(['forum' => $forum]);
        
        if (!$reaction) {
            $reaction = new Reaction();
            $reaction->setForum($forum)
                     ->setLikee(0)
                     ->setDislike(0)
                     ->setNblike(0)
                     ->setNbdislike(0);
            $this->em->persist($reaction);
        }
        
        return $reaction;
    }

    private function jsonResponse(Reaction $reaction): JsonResponse
    {
        return $this->json([
            'status' => 'success',
            'nblike' => $reaction->getNblike(),
            'nbdislike' => $reaction->getNbdislike(),
            'current_action' => $reaction->getLikee() ? 'like' : ($reaction->getDislike() ? 'dislike' : 'none')
        ]);
    }
}