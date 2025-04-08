<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\User;
use App\Form\UserType;
use Doctrine\ORM\EntityManagerInterface;

final class SignupController extends AbstractController
{
    /**
     * Afficher le formulaire de signup et ajouter un utilisateur
     */
    #[Route('/signup', name: 'app_signup', methods: ['GET', 'POST'])]
    public function signup(Request $request, EntityManagerInterface $entityManager): Response
    {
        if ($request->isMethod('POST')) {
            // Récupérer les données du formulaire
            $firstName = $request->request->get('firstName');
            $lastName = $request->request->get('lastName');
            $dateOfBirth = $request->request->get('dateOfBirth');
            $cin = $request->request->get('cin');
            $phoneNumber = $request->request->get('phoneNumber');
            $gender = $request->request->get('gender');
            $role = $request->request->get('role');
            $email = $request->request->get('email');
            $password = $request->request->get('password');
    
            // Créer un nouvel utilisateur
            $user = new User();
            $user->setFirstName($firstName);
            $user->setLastName($lastName);
    
            // Convertir $dateOfBirth (string) en objet \DateTime
            if (empty($dateOfBirth)) {
                $this->addFlash('error', 'Date of birth is required.');
                return $this->redirectToRoute('app_signup');
            }
            
            try {
                $dateOfBirthObject = new \DateTime($dateOfBirth);
                $user->setDateNaissance($dateOfBirthObject);
            } catch (\Exception $e) {
                $this->addFlash('error', 'Invalid date format.');
                return $this->redirectToRoute('app_signup');
            }
    
            $user->setCin($cin);
            $user->setNumTlf($phoneNumber);
            $user->setGenre($gender);
            $user->setRole($role);
            $user->setEmail($email);
    
            // Hacher le mot de passe avec SHA-256
            $hashedPassword = hash('sha256', $password);
            $user->setMdp($hashedPassword);
    
            // Sauvegarder l'utilisateur dans la base de données
            $entityManager->persist($user);
            $entityManager->flush();
    
            // Ajouter un message flash et rediriger
            $this->addFlash('success', 'Your account has been successfully created!');
            return $this->redirectToRoute('app_login'); // Redirige vers login
        }
    
        return $this->render('signup/index.html.twig');
    }

    /**
     * Afficher la liste des utilisateurs
     */
    #[Route('/users', name: 'app_user_index', methods: ['GET'])]
    public function getUsers(EntityManagerInterface $entityManager): Response
    {
        $users = $entityManager->getRepository(User::class)->findAll();

        return $this->render('user/index.html.twig', [
            'users' => $users,
        ]);
    }

    /**
     * Ajouter un nouvel utilisateur via un formulaire Symfony
     */
    #[Route('/users/new', name: 'app_user_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $user = new User();
        $form = $this->createForm(UserType::class, $user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($user);
            $entityManager->flush();

            return $this->redirectToRoute('app_user_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('user/new.html.twig', [
            'user' => $user,
            'form' => $form,
        ]);
    }

    /**
     * Afficher les détails d'un utilisateur
     */
    #[Route('/users/{id_user}', name: 'app_user_show', methods: ['GET'])]
    public function show(User $user): Response
    {
        return $this->render('user/show.html.twig', [
            'user' => $user,
        ]);
    }

    /**
     * Modifier un utilisateur
     */
    #[Route('/users/{id_user}/edit', name: 'app_user_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, User $user, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(UserType::class, $user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_user_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('user/edit.html.twig', [
            'user' => $user,
            'form' => $form,
        ]);
    }

    /**
     * Supprimer un utilisateur
     */
    #[Route('/users/{id_user}', name: 'app_user_delete', methods: ['POST'])]
    public function delete(Request $request, User $user, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete' . $user->getId(), $request->request->get('_token'))) {
            $entityManager->remove($user);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_user_index', [], Response::HTTP_SEE_OTHER);
    }
}