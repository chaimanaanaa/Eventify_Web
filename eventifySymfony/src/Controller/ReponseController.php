<?php

namespace App\Controller;

use App\Entity\Reponse;
use App\Entity\Reclamation;
use App\Repository\UserRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\{Request, JsonResponse};
use Symfony\Component\Routing\Annotation\Route;
use App\Form\ReponseTypeFormType;
use Symfony\Component\Validator\Validator\ValidatorInterface;
class ReponseController extends AbstractController
{
  



    #[Route('/reponse/add/{id}', name: 'reponse_add', methods: ['POST'])]
    public function addResponse(
        Request $request,
        Reclamation $reclamation,
        EntityManagerInterface $em,
        UserRepository $userRepo,
        ValidatorInterface $validator // Add this
    ): JsonResponse {
        $reponse = new Reponse();
        $user = $this->getUser() ?? $userRepo->find(1);
        
        $reponse
            ->setText($request->request->get('text'))
            ->setUser($user)
            ->setReclamation($reclamation)
            ->setDate(new \DateTime());
    
        // Validate before saving
        $errors = $validator->validate($reponse);
        
        if (count($errors) > 0) {
            $errorMessages = [];
            foreach ($errors as $error) {
                $errorMessages[] = $error->getMessage();
            }
            return $this->json(['success' => false, 'errors' => $errorMessages], 400);
        }
    
        $em->persist($reponse);
        $em->flush();
        
        return $this->json(['success' => true]);
    }
    

#[Route('/showr', name: 'app_reponse_show', methods: ['GET'])]
public function show(Request $request): Response
{
    // Get the reclamation ID from query parameters
    $id = $request->query->get('id');
    
    if (!$id) {
        throw $this->createNotFoundException('No reclamation ID provided');
    }

    $reclamation = $this->getRepository(Reclamation::class)->find($id);

    if (!$reclamation) {
        throw $this->createNotFoundException('Reclamation not found');
    }

    return $this->render('complaints/show1.html.twig', [
        'reclamation' => $reclamation,
    ]);
}
}