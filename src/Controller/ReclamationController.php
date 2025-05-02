<?php

namespace App\Controller;

use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\ORM\EntityManagerInterface;
use App\Repository\ReclamationRepository;
use Symfony\Component\HttpFoundation\Request;
use App\Form\ReclamationFormType;
use App\Entity\Reclamation;
use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use App\Entity\User; // Add this import
use Doctrine\Persistence\ManagerRegistry; // Add this import



use Symfony\Component\HttpFoundation\Session\SessionInterface;

class ReclamationController extends AbstractController
{
    #[Route('/complaints', name: 'app_complaints')]
    public function index(): Response
    {
        return $this->render('complaints/complaints.html.twig', [
            'controller_name' => 'ReclamationController',
        ]);
    }



    #[Route('/complaints', name: 'app_complaints')]
    public function complaints(ReclamationRepository $reclamationRepository, SessionInterface $session): Response
    {

        // For now, we'll use a static user ID - replace this later with session user
        //$userId = 1; // Static user ID - to be replaced with session user


         // Récupérer l'ID de l'utilisateur connecté depuis la session
         $userId = $session->get('user_id');

         if (!$userId) {
            return $this->render('home/index.html.twig' ) ; 
         }

    
        $reclamation = $reclamationRepository->findByUserId($userId);
        return $this->render('complaints/show1.html.twig', [
            'reclamation' => $reclamation,
        ]);
    }


#[Route('/show', name: 'app_reclamation_lister')]
public function listReclamations(ReclamationRepository $reclamationRepository , SessionInterface $session): Response
{
    // For now, we'll use a static user ID - replace this later with session user
    //$userId = 1; // Static user ID - to be replaced with session user

     // Récupérer l'ID de l'utilisateur connecté depuis la session
     $userId = $session->get('user_id');
         
    if (!$userId) {
        return $this->render('home/index.html.twig' ) ; 
    }

    
    $reclamation = $reclamationRepository->findByUserId($userId);
    
    return $this->render('complaints/show1.html.twig', [
        'reclamation' => $reclamation,
    ]);
}

 


#[Route('/add_rec', name: 'app_reclamation_add')]
public function add(Request $request, EntityManagerInterface $em , SessionInterface $session): Response
{
    $reclamation = new Reclamation();
    $form = $this->createForm(ReclamationFormType::class, $reclamation);

    $form->handleRequest($request);
    if ($form->isSubmitted() && $form->isValid()) {
        try {
            // Handle file upload
            $imageFile = $form->get('imageFile')->getData();
            
            if ($imageFile) {
                $newFilename = uniqid().'.'.$imageFile->guessExtension();
                $imageFile->move(
                    $this->getParameter('uploads_directory'),
                    $newFilename
                );
                $reclamation->setImgRec($newFilename);
            } else {
                // If no file is uploaded, add a validation error
                $this->addFlash('error', 'Please upload an image.');
                return $this->redirectToRoute('app_reclamation_add');
            }

            // Set static user (ID = 1)
             // Récupérer l'ID de l'utilisateur connecté depuis la session
            $userId = $session->get('user_id');
                    
            if (!$userId) {
                return $this->render('home/index.html.twig' ) ; 
            }


            $user = $em->getReference(User::class, $userId);
            $reclamation->setUser($user);
            
            $em->persist($reclamation);
            $em->flush();

            $this->addFlash('success', 'Reclamation added successfully!');
            return $this->redirectToRoute('app_reclamation_lister');
            
        } catch (\Exception $e) {
            $this->addFlash('error', 'Error saving reclamation: '.$e->getMessage());
        }
    }

    return $this->render('complaints/add.html.twig', [
        'form' => $form->createView(),
    ]);
}
    #[Route('/edit_rec', name: 'app_reclamation_edit', methods: ['GET', 'POST'])]
    public function edit(
        Request $request,
        EntityManagerInterface $em,
        ManagerRegistry $mr
    ): Response {
        // Get ID from either GET or POST
        $id = $request->isMethod('POST') 
            ? $request->request->get('id') 
            : $request->query->get('id');
    
        if (!$id) {
            throw $this->createNotFoundException('No reclamation ID provided');
        }
    
        $reclamation = $mr->getRepository(Reclamation::class)->find($id);
    
        if (!$reclamation) {
            throw $this->createNotFoundException('Reclamation not found');
        }
    
        $form = $this->createForm(ReclamationFormType::class, $reclamation);
        $form->handleRequest($request);
    
        if ($form->isSubmitted() && $form->isValid()) {
            // Handle file upload
            $imageFile = $form->get('imageFile')->getData();
            if ($imageFile) {
                $newFilename = uniqid() . '.' . $imageFile->guessExtension();
                try {
                    $imageFile->move(
                        $this->getParameter('uploads_directory'),
                        $newFilename
                    );
                    $reclamation->setImgRec($newFilename);
                } catch (FileException $e) {
                    $this->addFlash('error', 'Error uploading the image: ' . $e->getMessage());
                }
            }
    
            $em->flush();
            $this->addFlash('success', 'Reclamation updated successfully!');
            return $this->redirectToRoute('app_reclamation_lister');
        }
    
        return $this->render('complaints/edit.html.twig', [
            'form' => $form->createView(),
            'reclamation' => $reclamation
        ]);
    }

#[Route('/delete_rec/{id}', name: 'app_reclamation_delete', methods: ['GET', 'DELETE'])]
public function delete(Request $request, int $id, EntityManagerInterface $em): Response
{
    $reclamation = $em->getRepository(Reclamation::class)->find($id);
    
    if ($reclamation) {
        $em->remove($reclamation);
        $em->flush();
        
        if ($request->isXmlHttpRequest()) {
            return new JsonResponse(['status' => 'success']);
        }
        
        $this->addFlash('success', 'Reclamation deleted');
    }
    
    if ($request->isXmlHttpRequest()) {
        return new JsonResponse(['status' => 'error'], 400);
    }
    
    return $this->redirectToRoute('app_reclamation_lister');
}






//back 

#[Route('/complaintsback', name: 'app_complaintsBack')]
public function complaintsBack(ReclamationRepository $rep, Request $request): Response
{
   // Create a form for searching reclamations
   $form = $this->createFormBuilder()
   ->add('titre', TextType::class, [
       'required' => false,
       'label' => 'Search Reclamation',
   ])
   ->getForm();

// Handle the form submission
$form->handleRequest($request);

$reclamations = $rep->findAll(); // Default to all reclamations

if ($form->isSubmitted() && $form->isValid()) {
   $data = $form->getData();
   $titre = $data['titre'];

   // Use a method to search for reclamations by title
   $reclamations = $rep->findBy(['titre' => $titre]);
}

return $this->render('complaints/showback.html.twig', [
   'reclamations' => $reclamations,
  
]);
}


#[Route('/showback', name: 'app_reclamation_show')]
public function show(ReclamationRepository $rep, Request $request): Response
{
    // Create a form for searching reclamations
    $form = $this->createFormBuilder()
        ->add('titre', TextType::class, [
            'required' => false,
            'label' => 'Search Reclamation',
        ])
        ->getForm();

    // Handle the form submission
    $form->handleRequest($request);

    $reclamations = $rep->findAll(); // Default to all reclamations

    if ($form->isSubmitted() && $form->isValid()) {
        $data = $form->getData();
        $titre = $data['titre'];

        // Use a method to search for reclamations by title
        $reclamations = $rep->findBy(['titre' => $titre]);
    }

    return $this->render('complaints/showback.html.twig', [
        'reclamations' => $reclamations,
       
    ]);
}

#[Route('/update_rec', name: 'reclamation_update_status', methods: ['POST'])]
public function updateStatus(Request $request, EntityManagerInterface $em): JsonResponse
{
    // Debug request
    \error_log(print_r($request->request->all(), true));
    
    // Validate CSRF
    $submittedToken = $request->request->get('_token');
    if (!$this->isCsrfTokenValid('update_reclamation', $submittedToken)) {
        return $this->json(['success' => false, 'message' => 'Invalid token'], 403);
    }

    // Get and validate ID
    $id = $request->request->get('id');
    if (!$id) {
        return $this->json(['success' => false, 'message' => 'Missing ID'], 400);
    }

    // Find reclamation
    $reclamation = $em->getRepository(Reclamation::class)->find($id);
    if (!$reclamation) {
        return $this->json(['success' => false, 'message' => 'Not found'], 404);
    }

    // Update status
    $currentStatus = $reclamation->getStatu();
    if ($currentStatus === 'Pending') {
        $reclamation->setStatu('In Progress');
        $em->flush();
    }

    return $this->json([
        'success' => true,
        'newStatus' => $reclamation->getStatu(),
        'badgeClass' => $currentStatus === 'Pending' ? 'bg-warning' : $this->getBadgeClass($reclamation->getStatu()),
        'message' => 'Status updated'
    ]);
}
private function getBadgeClass(string $status): string
{
    return match ($status) {
        'Resolved' => 'bg-success',
        'In Progress' => 'bg-warning',
        default => 'bg-danger',
    };
}
 }