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
class ReclamationController extends AbstractController
{
    #[Route('/complaints', name: 'app_complaints')]
    public function index(): Response
    {
        return $this->render('complaints/complaints.html.twig', [
            'controller_name' => 'ReclamationController',
        ]);
    }



#[Route('/show', name: 'app_reclamation_lister')]
public function listReclamations(ReclamationRepository $reclamationRepository): Response
{
    // For now, we'll use a static user ID - replace this later with session user
    $userId = 1; // Static user ID - to be replaced with session user
    
    $reclamation = $reclamationRepository->findByUserId($userId);
    
    return $this->render('complaints/show1.html.twig', [
        'reclamation' => $reclamation,
    ]);
}

#[Route('/add', name: 'app_reclamation_add')]
    public function add(Request $request, EntityManagerInterface $em): Response
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
                }

                // Set static user (ID = 1)
                $user = $em->getReference(User::class, 1); // Now using the properly imported User class
                if (!$user) {
                    throw new \Exception("User with ID 1 not found - create one in your database");
                }
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
    #[Route('/edit', name: 'app_reclamation_edit', methods: ['GET', 'POST'])]
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

#[Route('/delete/{id}', name: 'app_reclamation_delete', methods: ['GET', 'DELETE'])]
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

#[Route('/update', name: 'reclamation_update_status', methods: ['POST'])]
public function updateStatus(
    Request $request,
    EntityManagerInterface $em,
    ManagerRegistry $mr
): JsonResponse {
    $id = $request->request->get('id');
    if (!$id) {
        return $this->json(['success' => false, 'message' => 'No reclamation ID provided'], 400);
    }

    $reclamation = $mr->getRepository(Reclamation::class)->find($id);
    if (!$reclamation) {
        return $this->json(['success' => false, 'message' => 'Reclamation not found'], 404);
    }

    $status = $request->request->get('status');
    if (!$status) {
        return $this->json(['success' => false, 'message' => 'No status provided'], 400);
    }

    $reclamation->setStatu($status);
    $em->flush();

    return $this->json([
        'success' => true,
        'newStatus' => $reclamation->getStatu(),
        'badgeClass' => $this->getBadgeClass($reclamation->getStatu())
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