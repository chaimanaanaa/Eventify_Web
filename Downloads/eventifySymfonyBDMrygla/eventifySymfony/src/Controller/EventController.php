<?php

namespace App\Controller;

use App\Entity\Event;
use App\Form\EventType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/event')]
final class EventController extends AbstractController
{
    #[Route(name: 'app_event_index', methods: ['GET'])]
    public function index(EntityManagerInterface $entityManager): Response
    {
        $events = $entityManager
            ->getRepository(Event::class)
            ->findAll();

        return $this->render('event/index.html.twig', [
            'events' => $events,
        ]);
    }
    #[Route('/new', name: 'app_event_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $event = new Event();
        $form = $this->createForm(EventType::class, $event);
        $form->handleRequest($request);
    
        if ($form->isSubmitted()) {
            if ($form->isValid()) {
                try {
                    // Définir le type à "personnalisé" pour les clients
                    $event->setType('personnalisé');
    
                    // Gérer l'upload de l'image
                    $imageFile = $form->get('imageven')->getData();
                    if ($imageFile) {
                        $newFilename = uniqid().'.'.$imageFile->guessExtension();
                        $imageFile->move(
                            $this->getParameter('images_directory'),
                            $newFilename
                        );
                        $event->setImageven($newFilename);
                    } else {
                        // Définir une valeur par défaut si aucune image n'est téléchargée
                        $event->setImageven('default_image.jpg'); // Remplace par une image par défaut si nécessaire
                    }
    
                    // Enregistrer l'événement dans la base de données
                    $entityManager->persist($event);
                    $entityManager->flush();
    
                    // Ajouter un message de succès
                    $this->addFlash('success', 'L\'événement a été créé avec succès !');
    
                    // Rediriger vers une page (par exemple, la liste des événements)
                    return $this->redirectToRoute('app_event_index', [], Response::HTTP_SEE_OTHER);
                } catch (\Exception $e) {
                    // En cas d'erreur (par exemple, problème d'upload ou de base de données)
                    $this->addFlash('error', 'Erreur lors de la création de l\'événement : ' . $e->getMessage());
                }
            } else {
                // Si le formulaire n'est pas valide, afficher les erreurs
                $errors = [];
                foreach ($form->getErrors(true) as $error) {
                    $errors[] = $error->getMessage();
                }
                $this->addFlash('error', 'Le formulaire contient des erreurs : ' . implode(', ', $errors));
            }
        } else {
            // Si le formulaire n'est pas soumis
            $this->addFlash('info', 'Le formulaire n\'a pas été soumis.');
        }
    
        return $this->render('event/new.html.twig', [
            'event' => $event,
            'form' => $form->createView(),
        ]);
    }
  #[Route('/{id_event}', name: 'app_event_show', methods: ['GET'])]
    public function show(Event $event): Response
    {
        return $this->render('event/show.html.twig', [
            'event' => $event,
        ]);
    }

    #[Route('/{id_event}/edit', name: 'app_event_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Event $event, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(EventType::class, $event);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_event_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('event/edit.html.twig', [
            'event' => $event,
            'form' => $form,
        ]);
    }

    #[Route('/{id_event}', name: 'app_event_delete', methods: ['POST'])]
    public function delete(Request $request, Event $event, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$event->getId(), $request->getPayload()->getString('_token'))) {

            $entityManager->remove($event);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_event_index', [], Response::HTTP_SEE_OTHER);
    }
}
