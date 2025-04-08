<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
final class HomeController extends AbstractController
{
    //home
    #[Route('/home', name: 'app_home')]
    public function index(): Response
    {
        return $this->render('home/index.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    }



    //about
    #[Route('/about', name: 'app_about')]
    public function about(): Response
    {
        return $this->render('home/about.html.twig');
    }

    //events
    #[Route('/events', name: 'app_events')]
    public function events(): Response
    {
        return $this->render('events/events.html.twig');
    }

    //reservations
    #[Route('/reservations', name: 'app_reservations')]
    public function reservations(): Response
    {
        return $this->render('reservations/reservations.html.twig');
    }

    //forums
    #[Route('/forums', name: 'app_forums')]
    public function forums(): Response
    {
        return $this->render('forums/forums.html.twig');
    }
/*
    ///complaints
    #[Route('/complaints', name: 'app_complaints')]
    public function complaints(): Response
    {
        return $this->render('complaints/complaints.html.twig');
    }*/
    //organizers
    #[Route('/organizers', name: 'app_organizers')]
    public function organizers(): Response
    {
        return $this->render('organizers/organizers.html.twig');
    }

    //logistics
    #[Route('/logistics', name: 'app_logistics')]
    public function logistics(): Response
    {
        return $this->render('logistics/logistics.html.twig');
    }

    //marketplace
    #[Route('/marketplace', name: 'app_marketplace')]
    public function marketplace(): Response
    {
        return $this->render('marketplace/marketplace.html.twig');
    }

    //profile
    #[Route('/profile', name: 'app_profile')]
    public function profile(): Response
    {
        return $this->render('profile/profile.html.twig');
    }

    
    #[Route('/logout', name: 'app_logout', methods: ['GET'])]
public function logout(SessionInterface $session): Response
{
    // Supprimer toutes les données de session
    $session->clear();

    // Ajouter un message flash et rediriger
    $this->addFlash('success', 'You have been logged out.');
    return $this->redirectToRoute('app_login');
}
}
