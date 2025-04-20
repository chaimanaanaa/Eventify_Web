<?php

namespace App\Controller;

use App\Entity\Event;
use App\Form\EventType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\HttpFoundation\JsonResponse;

final class EventController extends AbstractController
{
    #[Route('/events', name: 'app_event_index')]
    public function index(EntityManagerInterface $entityManager): Response
    {
            // Récupérer tous les événements depuis la base de données

        $events = $entityManager->getRepository(Event::class)->findAll();
    
            // Passer les événements à la vue

        return $this->render('events/events.html.twig', [
            'events' => $events,
        ]);
    }
    

    #[Route('/eventnew', name: 'app_event_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $event = new Event();
        $form = $this->createForm(EventType::class, $event);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            try {
                $event->setType('personnalisé');

                $imageFile = $form->get('imageven')->getData();
                if ($imageFile) {
                    $newFilename = uniqid() . '.' . $imageFile->guessExtension();
                    $imageFile->move(
                        $this->getParameter('images_directory'),
                        $newFilename
                    );
                    $event->setImageven($newFilename);
                } else {
                    $event->setImageven('default_image.jpg');
                }

                $entityManager->persist($event);
                $entityManager->flush();

                $this->addFlash('success', 'L\'événement a été créé avec succès !');

                return $this->redirectToRoute('app_event_index');
            } catch (\Exception $e) {
                $this->addFlash('error', 'Erreur : ' . $e->getMessage());
            }
        }

        return $this->render('event/new.html.twig', [
            'event' => $event,
            'form' => $form->createView(),
        ]);
    }

#[Route('/event/{id}', name: 'app_event_show', methods: ['GET'])]
public function show(Event $event): Response
{
    return $this->render('event/show.html.twig', [
        'event' => $event,
    ]);
}


#[Route('/eventspersonalise', name: 'app_events_personalise')]
public function showPersonaliseEvents(EntityManagerInterface $entityManager): Response
{
    // Récupérer les événements de type "personnalisé"
    $events = $entityManager->getRepository(Event::class)->findBy(['type' => 'personnalisé']);

    // Passer les événements à la vue
    return $this->render('events/events.html.twig', [
        'events' => $events,
    ]);
}
#[Route('/event/{id}/edit', name: 'app_event_edit', methods: ['POST'])]
public function edit(Request $request, Event $event, EntityManagerInterface $entityManager): Response
{
    $data = $request->request->all();
    $uploadedFile = $request->files->get('image');

    // Mise à jour des champs
    $event->setDescription($data['description']);
    $event->setLieu($data['lieu']);
    $event->setPrixEstime($data['prix']);
    $event->setCategorie($data['categorie']);

    // Gestion de l'image
    if ($uploadedFile) {
        $newFilename = uniqid().'.'.$uploadedFile->guessExtension();
        $uploadedFile->move(
            $this->getParameter('images_directory'),
            $newFilename
        );
        $event->setImageven($newFilename);
    }

    $entityManager->flush();

    return new Response('OK', Response::HTTP_OK);
}

#[Route('/event/{id}', name: 'app_event_delete', methods: ['POST', 'DELETE'])]
public function delete(Request $request, Event $event, EntityManagerInterface $entityManager): Response
{
    // Vérification CSRF
    $token = $request->request->get('_token') ?? $request->headers->get('X-CSRF-Token');
    
    if (!$this->isCsrfTokenValid('delete'.$event->getIdEvent(), $token)) {
        if ($request->isXmlHttpRequest()) {
            return new JsonResponse(['status' => 'error', 'message' => 'Token CSRF invalide'], 400);
        }
        $this->addFlash('error', 'Token CSRF invalide');
        return $this->redirectToRoute('app_event_index');
    }

    try {
        $entityManager->remove($event);
        $entityManager->flush();

        if ($request->isXmlHttpRequest()) {
            return new JsonResponse(['status' => 'success']);
        }

        $this->addFlash('success', 'Événement supprimé avec succès');
        return $this->redirectToRoute('app_event_index');
    } catch (\Exception $e) {
        if ($request->isXmlHttpRequest()) {
            return new JsonResponse(['status' => 'error', 'message' => $e->getMessage()], 500);
        }

        $this->addFlash('error', 'Erreur lors de la suppression: '.$e->getMessage());
        return $this->redirectToRoute('app_event_index');
    }
}

        // Affichage des événements dans le back-end (admin)


        #[Route('/eventsback', name: 'app_eventsBack')]
        public function eventsBack(EntityManagerInterface $entityManager): Response
        {
             // Récupérer tous les événements depuis la base de données
             $events = $entityManager->getRepository(Event::class)->findAll();
        
             // Passer les événements à la vue
             return $this->render('events/eventsBack.html.twig', [
                 'events' => $events,
             ]);
        }
      
        #[Route('/adminevents', name: 'app_event_index_admin')]
        public function indexAdmin(EntityManagerInterface $entityManager): Response
        {
            // Récupérer tous les événements depuis la base de données
            $events = $entityManager->getRepository(Event::class)->findAll();
        
            // Passer les événements à la vue
            return $this->render('events/eventsBack.html.twig', [
                'events' => $events,
            ]);
        }
        
        //affichage de la liste des evenements personalise 


        #[Route('/newOff', name: 'app_event_newOff', methods: ['GET', 'POST'])]
        public function newOff(Request $request, EntityManagerInterface $entityManager): Response
        {
            $event = new Event();
            $form = $this->createForm(EventType::class, $event);
            $form->handleRequest($request);
    
            if ($form->isSubmitted() && $form->isValid()) {
                try {
                    $event->setType('offert');
    
                    $imageFile = $form->get('imageven')->getData();
                    if ($imageFile) {
                        $newFilename = uniqid() . '.' . $imageFile->guessExtension();
                        $imageFile->move(
                            $this->getParameter('images_directory'),
                            $newFilename
                        );
                        $event->setImageven($newFilename);
                    } else {
                        $event->setImageven('default_image.jpg');
                    }
    
                    $entityManager->persist($event);
                    $entityManager->flush();
    
                    $this->addFlash('success', 'L\'événement a été créé avec succès !');
    
                    return $this->redirectToRoute('app_eventsBack');
                } catch (\Exception $e) {
                    $this->addFlash('error', 'Erreur : ' . $e->getMessage());
                }
            }
    
            return $this->render('event/newFormAdmin.html.twig', [
                'event' => $event,
                'form' => $form->createView(),
            ]);
        }
       

}
        
        

