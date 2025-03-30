<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\User;
use App\Form\UserType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use libphonenumber\PhoneNumberUtil;
use libphonenumber\PhoneNumberFormat;
use libphonenumber\NumberParseException;
use Symfony\Component\HttpFoundation\JsonResponse;

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
             // Gérer l'upload de l'image
      
        /** @var UploadedFile|null $profileImage */
        $profileImage = $request->files->get('fileInput');
        $capturedPhoto = $request->request->get('capturedPhoto');
       // dd($request->request->all());
        if ($capturedPhoto) {
            // Traiter la photo capturée (base64)
            $uploadsDirectory = $this->getParameter('kernel.project_dir') . '/public/assets';
            $imageData = base64_decode(preg_replace('#^data:image/\w+;base64,#i', '', $capturedPhoto));
            $newFilename = 'captured-' . uniqid() . '.png';
        
            try {
                file_put_contents($uploadsDirectory . '/' . $newFilename, $imageData);
                $user->setImg('assets/' . $newFilename);
            } catch (\Exception $e) {
                $this->addFlash('error', 'Failed to save the captured photo.');
                return $this->redirectToRoute('app_signup');
            }
        } elseif ($profileImage) {
            // Traiter l'image téléchargée
            $uploadsDirectory = $this->getParameter('kernel.project_dir') . '/public/assets';
            $originalFilename = pathinfo($profileImage->getClientOriginalName(), PATHINFO_FILENAME);
            $safeFilename = preg_replace('/[^a-zA-Z0-9_-]/', '_', $originalFilename);
            $newFilename = $safeFilename . '-' . uniqid() . '.' . $profileImage->guessExtension();
        
            try {
                $profileImage->move($uploadsDirectory, $newFilename);
                $user->setImg('assets/' . $newFilename);
            } catch (FileException $e) {
                $this->addFlash('error', 'Failed to upload the image.');
                return $this->redirectToRoute('app_signup');
            }
        } else {
            $this->addFlash('error', 'No image provided.');
            return $this->redirectToRoute('app_signup');
        }
            // Sauvegarder l'utilisateur dans la base de données
            $entityManager->persist($user);
            $entityManager->flush();
           
           
             // Ajouter un message flash et rediriger
             //$this->addFlash('success', 'Your account has been successfully created!');
            //return $this->redirectToRoute('app_login'); // Redirige vers login
            return $this->redirectToRoute('app_login', [
                'email' => $email,
            ]);
             // Ajouter un message flash et rediriger
             $this->addFlash('success', 'Your account has been successfully created!');
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

//ajout de code pays pour le num

    #[Route('/validate-phone', name: 'validate_phone', methods: ['POST'])]
    public function validatePhone(Request $request): JsonResponse
    {
        $phoneNumber = $request->request->get('phoneNumber');
        $regionCodes = ["TN", "FR", "US", "CA", "GB", "KR", "JP", "DE", "IT", "ES", "AU", "BR", "CN", "RU", "IN", "ID", "MX", "NL", "SE", "CH", "TR", "ZA", "AR", "AT", "BE", "BG", "CL", "CO", "CZ", "DK", "EG", "FI", "GR", "HK", "HU", "IE", "IL", "IR", "MY", "NO", "NZ", "PH", "PL", "PT", "RO", "SA", "SG", "SK", "TH", "UA", "AE", "VN"];

        $phoneUtil = PhoneNumberUtil::getInstance();
        $formattedNumber = null;

        foreach ($regionCodes as $regionCode) {
            try {
                $numberProto = $phoneUtil->parse($phoneNumber, $regionCode);
                if ($phoneUtil->isValidNumber($numberProto)) {
                    $formattedNumber = $phoneUtil->format($numberProto, PhoneNumberFormat::INTERNATIONAL);
                    break;
                }
            } catch (NumberParseException $e) {
                // Continue to the next region code
            }
        }

        if ($formattedNumber) {
            return new JsonResponse(['success' => true, 'formattedNumber' => $formattedNumber]);
        }

        return new JsonResponse(['success' => false, 'message' => 'Invalid phone number']);
    }







}









