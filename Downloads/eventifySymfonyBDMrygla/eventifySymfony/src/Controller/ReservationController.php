<?php

namespace App\Controller;

use App\Entity\Event;
use App\Entity\User;
use App\Entity\Reservation;
use App\Form\ReservationType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

final class ReservationController extends AbstractController
{
   
    

    #[Route('/reservation', name: 'app_reservation_index', methods: ['GET'])]
    public function index(EntityManagerInterface $entityManager): Response
    {
        // Récupérer l'utilisateur statique avec ID = 1
        $user = $entityManager->getRepository(User::class)->find(1);
    
        if (!$user) {
            $this->addFlash('error', 'Utilisateur avec ID 1 non trouvé.');
            return $this->redirectToRoute('app_event_index');
        }
    
        // Récupérer les réservations de l'utilisateur
        $reservations = $entityManager->getRepository(Reservation::class)->findBy(['user' => $user]);
    
        // Préparer les événements avec leurs IDs de réservation
        $events = array_map(function ($reservation) {
            $event = $reservation->getEvent();
            $event->reservationId = $reservation->getId(); // Ajouter l'ID de la réservation à l'événement
            return $event;
        }, $reservations);
    
        return $this->render('reservation/index.html.twig', [
            'events' => $events,
        ]);
    }

    #[Route('/reservation/new', name: 'app_reservation_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $reservation = new Reservation();
        $form = $this->createForm(ReservationType::class, $reservation);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            try {
                // Associer un utilisateur connecté
                $user = $this->getUser();
                if (!$user instanceof User) {
                    $this->addFlash('error', 'Vous devez être connecté pour effectuer une réservation.');
                    return $this->redirectToRoute('app_reservation_new');
                }
                $reservation->setUser($user);

                // Sauvegarder la réservation
                $entityManager->persist($reservation);
                $entityManager->flush();

                $this->addFlash('success', 'La réservation a été créée avec succès !');
                return $this->redirectToRoute('app_reservation_index');
            } catch (\Exception $e) {
                $this->addFlash('error', 'Erreur : ' . $e->getMessage());
            }
        }

        return $this->render('reservation/new.html.twig', [
            'reservation' => $reservation,
            'form' => $form->createView(),
        ]);
    }

    #[Route('/reservation/{idRes}', name: 'app_reservation_show', methods: ['GET'])]
    public function show(Reservation $reservation): Response
    {
        return $this->render('reservation/show.html.twig', [
            'reservation' => $reservation,
        ]);
    }

    #[Route('/reservation/{idRes}/edit', name: 'app_reservation_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Reservation $reservation, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(ReservationType::class, $reservation);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();
            $this->addFlash('success', 'La réservation a été modifiée avec succès !');
            return $this->redirectToRoute('app_reservation_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('reservation/edit.html.twig', [
            'reservation' => $reservation,
            'form' => $form->createView(),
        ]);
    }

    #[Route('/reservation/{idRes}', name: 'app_reservation_delete', methods: ['POST'])]
    public function delete(Request $request, Reservation $reservation, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete' . $reservation->getId(), $request->request->get('_token'))) {
            $entityManager->remove($reservation);
            $entityManager->flush();
            $this->addFlash('success', 'Réservation supprimée avec succès.');
        } else {
            $this->addFlash('error', 'Jeton CSRF invalide. La suppression a échoué.');
        }

        return $this->redirectToRoute('app_reservation_index', [], Response::HTTP_SEE_OTHER);
    }

    #[Route('/reservation/event/{id}/reserve', name: 'app_reservation_create', methods: ['POST'])]
public function create(Request $request, Event $event, EntityManagerInterface $entityManager): JsonResponse
{
    // Validate CSRF token
    if (!$this->isCsrfTokenValid('reserve-event', $request->request->get('_token'))) {
        return new JsonResponse([
            'status' => 'error',
            'message' => 'Jeton CSRF invalide.'
        ], Response::HTTP_FORBIDDEN);
    }

    // Récupérer un utilisateur statique (ex : avec ID = 1)
    $user = $entityManager->getRepository(User::class)->find(1);

    if (!$user) {
        return new JsonResponse([
            'status' => 'error',
            'message' => 'Utilisateur avec ID 1 non trouvé.'
        ], Response::HTTP_NOT_FOUND);
    }

    try {
        $reservation = new Reservation();
        $reservation->setUser($user);
        $reservation->setEvent($event);
        $reservation->setDate(new \DateTime());

        $entityManager->persist($reservation);
        $entityManager->flush();

        return new JsonResponse([
            'status' => 'success',
            'message' => 'Réservation effectuée avec succès !'
        ], Response::HTTP_OK);
    } catch (\Exception $e) {
        return new JsonResponse([
            'status' => 'error',
            'message' => 'Erreur lors de la réservation : ' . $e->getMessage()
        ], Response::HTTP_INTERNAL_SERVER_ERROR);
    }
}

#[Route('/admin/reservations', name: 'app_reservation_list', methods: ['GET'])]
public function list(EntityManagerInterface $entityManager): Response
{
    // Récupérer toutes les réservations
    $reservations = $entityManager->getRepository(Reservation::class)->findAll();

    return $this->render('reservation/list.html.twig', [
        'reservations' => $reservations,
    ]);
}
}