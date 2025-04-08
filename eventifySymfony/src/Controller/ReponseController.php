<?php

namespace App\Controller;

use App\Entity\Reponse;
use App\Entity\Reclamation;
use App\Repository\UserRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\{Request, JsonResponse};
use Symfony\Component\Routing\Annotation\Route;

class ReponseController extends AbstractController
{
    #[Route('/reponse/add/{id}', name: 'reponse_add', methods: ['POST'])]
    public function addResponse(
        Request $request,
        Reclamation $reclamation,
        EntityManagerInterface $em,
        UserRepository $userRepo
    ): JsonResponse {
        $reponse = new Reponse();
        $user = $this->getUser() ?? $userRepo->find(1); // Still keeps the admin fallback
        
        $reponse
            ->setText($request->request->get('text'))
            ->setUser($user)
            ->setReclamation($reclamation)
            ->setDate(new \DateTime());
    
        $em->persist($reponse);
        $em->flush();
    
        return $this->json(['success' => true]); // Only returns success status
    }
}