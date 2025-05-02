<?php

namespace App\Controller;
use App\Entity\User;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
final class LoginController extends AbstractController
{
   
        #[Route('/login', name: 'app_login', methods: ['GET', 'POST'])]
        public function login(Request $request, EntityManagerInterface $entityManager,SessionInterface $session): Response
        {
            if ($request->isMethod('POST')) {
                $email = $request->request->get('member-login-number');
                $password = $request->request->get('member-login-password');
    
                // Rechercher l'utilisateur par email
                $user = $entityManager->getRepository(User::class)->findOneBy(['email' => $email]);
    
                if (!$user) {
                    $this->addFlash('error', 'Invalid email ');
                    return $this->redirectToRoute('app_login');
                }
    
                // Vérifier le mdp
                $hashedPassword = hash('sha256', $password);
                if ($user->getMdp() !== $hashedPassword) {
                    $this->addFlash('error', 'Invalid password.');
                    return $this->redirectToRoute('app_login');
                }
    
                // Stocker les informations de l'utilisateur dans la session
                $session->set('user_id', $user->getId());
                $session->set('user_name', $user->getFirstName());
                $session->set('user_email', $user->getEmail());

                $this->addFlash('success', 'Welcome back, ' . $user->getFirstName() . '!');
               
                //  role en majuscules pour la comparaison
                $role = strtoupper($user->getRole());
                $session->set('user_role', $role);

                // Rediriger en fonction du rôle
                if ($role === 'ADMIN') {
                    $this->addFlash('success', 'Welcome back, Admin ' . $user->getFirstName() . '!');
                    return $this->redirectToRoute('app_dashboard'); // Redirige vers le tableau de bord
                } else {
                    $this->addFlash('success', 'Welcome back, ' . $user->getFirstName() . '!');
                    return $this->redirectToRoute('app_home'); // Redirige vers la page d'accueil
                }
            }
    
            return $this->render('login/index.html.twig');
        }
    }

