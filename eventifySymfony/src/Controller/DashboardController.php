<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
final class DashboardController extends AbstractController
{
    #[Route('/dashboard', name: 'app_dashboard')]
    public function index(): Response
    {
        return $this->render('dashboard/index.html.twig', [
            'controller_name' => 'DashboardController',
        ]);
    }
    #[Route('/staff', name: 'app_staff')]
    public function staff(): Response
    {
        return $this->render('staff/staff.html.twig');
    }
    #[Route('/eventsback', name: 'app_eventsBack')]
    public function eventsBack(): Response
    {
        return $this->render('events/eventsBack.html.twig');
    }

    #[Route('/logisticsback', name: 'app_logisticsBack')]
    public function logisticsBack(): Response
    {
        return $this->render('logistics/logisticsBack.html.twig');
    }

    #[Route('/complaintsback', name: 'app_complaintsBack')]
    public function complaintsBack(): Response
    {
        return $this->render('complaints/complaintsBack.html.twig');
    }

    #[Route('/forumsback', name: 'app_forumsBack')]
    public function forumsBack(): Response
    {
        return $this->render('forums/forumsBack.html.twig');
    }

    #[Route('/organizersback', name: 'app_organizersBack')]
    public function organizersBack(): Response
    {
        return $this->render('organizers/organizersBack.html.twig');
    }

    #[Route('/offersback', name: 'app_offersBack')]
    public function offersBack(): Response
    {
        return $this->render('offers/offersBack.html.twig');
    }

    #[Route('/profileBack', name: 'app_profileBack')]
    public function profileBack(): Response
    {
        return $this->render('profile/profileBack.html.twig');
    }

  

 #[Route('/logout', name: 'app_logoutBack', methods: ['GET'])]
public function logoutBack(SessionInterface $session): Response
{
    // Supprimer toutes les données de session
         $session->clear();

    // Ajouter un message flash et rediriger
    $this->addFlash('success', 'You have been logged out.');
    return $this->render('signup/index.html.twig');
}
}
