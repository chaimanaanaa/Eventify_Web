<?php

namespace App\Controller;
use Symfony\Component\Mailer\Mailer\Exception\TransportExceptionInterface;
use App\Entity\User;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;
use Psr\Log\LoggerInterface;
use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\HttpFoundation\JsonResponse;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
use Symfony\Component\HttpFoundation\StreamedResponse;
use Symfony\Component\Mailer\Transport;
use Symfony\Component\Mailer\Mailer;

final class LoginController extends AbstractController
{
    // login

   /* #[Route('/login', name: 'app_login', methods: ['GET', 'POST'])]
    public function login(Request $request, EntityManagerInterface $entityManager, SessionInterface $session): Response
    {
        $alert = null;

        if ($request->isMethod('POST')) {
            $email = $request->request->get('member-login-number');
            $password = $request->request->get('member-login-password');

            // Rechercher l'utilisateur par email
            $user = $entityManager->getRepository(User::class)->findOneBy(['email' => $email]);

            if (!$user) {
                $alert = [
                    'type' => 'error',
                    'message' => 'Invalid email. Please try again.',
                ];
                return $this->render('login/index.html.twig', [
                    'alert' => $alert,
                ]);
            }

            // Vérifier le mot de passe
            $hashedPassword = hash('sha256', $password);
            if ($user->getMdp() !== $hashedPassword) {
                $alert = [
                    'type' => 'error',
                    'message' => 'Invalid password. Please try again.',
                ];
                return $this->render('login/index.html.twig', [
                    'alert' => $alert,
                ]);
            }
            if ($user->getBlocked() === 1) {
                $alert = [
                    'type' => 'error',
                    'message' => 'Your Account is blocked by the Admin.',
                ];
                return $this->render('login/blockedPage.html.twig', [
                    'alert' => $alert,
                ]);
            }



            // Stocker les informations de l'utilisateur dans la session
            $session->set('user_id', $user->getId());
            $session->set('user_name', $user->getFirstName());
            $session->set('user_email', $user->getEmail());
            //dd($session);
            // Vérifier si la session est bien remplie
            if (!$session->has('user_id') || !$session->has('user_name') || !$session->has('user_email')) {
                $alert = [
                    'type' => 'error',
                    'message' => 'An error occurred while creating your session. Please try again.',
                ];
                return $this->render('login/index.html.twig', [
                    'alert' => $alert,
                ]);
            }

            // Ajouter un message de succès
            $alert = [
                'type' => 'success',
                'message' => 'Welcome back, ' . $user->getFirstName() . '!',
            ];

            // Récupérer le rôle en majuscules pour la comparaison
            $role = strtoupper($user->getRole());
            $session->set('user_role', $role);

            // Rediriger en fonction du rôle
            if ($role === 'ADMIN') {
                $alert = [
                    'type' => 'success',
                    'message' => 'Welcome back, Admin ' . $user->getFirstName() . '!',
                ];
                return $this->redirectToRoute('app_dashboard'); // Redirige vers le tableau de bord
            } else {
                return $this->redirectToRoute('app_home'); // Redirige vers la page d'accueil
            }
        }

        return $this->render('login/index.html.twig', [
            'alert' => $alert,
        ]);
    }*/
   
/*#[Route('/login', name: 'app_login', methods: ['GET', 'POST'])]
public function login(Request $request, EntityManagerInterface $entityManager, SessionInterface $session): Response
{
    $alert = null;
    //si remember me activé les champs sont prés remplies
    if ($request->cookies->has('REMEMBER_ME')) {
        $rememberMeData = json_decode($request->cookies->get('REMEMBER_ME'), true);
        $email = $rememberMeData['email'] ?? '';
        $password = $rememberMeData['password'] ?? '';
        $faceDescriptor = $request->request->get('faceDescriptor'); // Récupérer le descripteur de visage

    }

    // Récupérer l'email depuis la query string (GET) ou laisser vide par défaut
    $email = $request->query->get('email', '');

    if ($request->isMethod('POST')) {
        $email = $request->request->get('member-login-number');
        $password = $request->request->get('member-login-password');
        $rememberMe = $request->request->get('_remember_me'); // Récupérer la valeur de la case "Remember Me"

        // Rechercher l'utilisateur par email
        $user = $entityManager->getRepository(User::class)->findOneBy(['email' => $email]);

        if (!$user) {
            $alert = [
                'type' => 'error',
                'message' => 'Invalid email. Please try again.',
            ];
            return $this->render('login/index.html.twig', [
                'alert' => $alert,
                'email' => $email, // Pré-remplir le champ email avec la valeur saisie
            ]);
        }

        // Vérifier le mot de passe
        $hashedPassword = hash('sha256', $password);
        if ($user->getMdp() !== $hashedPassword) {
            $alert = [
                'type' => 'error',
                'message' => 'Invalid password. Please try again.',
            ];
            return $this->render('login/index.html.twig', [
                'alert' => $alert,
                'email' => $email, // Pré-remplir le champ email avec la valeur saisie
            ]);
        }
        //Vérifier si le compte est bloqué
        if ($user->getBlocked() === 1) {
            $alert = [
                'type' => 'error',
                'message' => 'Your Account is blocked by the Admin.',
            ];
            return $this->render('login/blockedPage.html.twig', [
                'alert' => $alert,
            ]);
        }

        // Vérifier le descripteur de visage si fourni
        if ($faceDescriptor) {
            $storedDescriptor = json_decode($user->getFaceDescriptor(), true);

            if (!$storedDescriptor || !$this->compareDescriptors(json_decode($faceDescriptor, true), $storedDescriptor)) {
                $alert = [
                    'type' => 'error',
                    'message' => 'Face not recognized. Please try again.',
                ];
                return $this->render('login/index.html.twig', [
                    'alert' => $alert,
                    'email' => $email, // Pré-remplir le champ email avec la valeur saisie
                ]);
            }
        }

        // Stocker les informations de l'utilisateur dans la session
        $session->set('user_id', $user->getId());
        $session->set('user_name', $user->getFirstName());
        $session->set('user_email', $user->getEmail());
        
        // Vérifier si la session est bien remplie
        if (!$session->has('user_id') || !$session->has('user_name') || !$session->has('user_email')) {
            $alert = [
                'type' => 'error',
                'message' => 'An error occurred while creating your session. Please try again.',
            ];
            return $this->render('login/index.html.twig', [
                'alert' => $alert,
                'email' => $email, // Pré-remplir le champ email avec la valeur saisie
            ]);
        }
        // Ajouter un cookie "Remember Me" si la case est cochée
        if ($rememberMe) {
            $response = $this->redirectToRoute('app_home'); // Redirection après connexion
            $cookie = new \Symfony\Component\HttpFoundation\Cookie(
                'REMEMBER_ME', // Nom du cookie
                json_encode(['email' => $email, 'password' => $password]), // Contenu du cookie
                time() + (7 * 24 * 60 * 60), // Expiration : 7 jours
                '/', // Chemin
                null, // Domaine
                false, // HTTPS uniquement
                true, // HTTPOnly
                false, // Raw
                'lax' // SameSite
            );
            $response->headers->setCookie($cookie);
            return $response;
        }
       
        // Ajouter un message de succès
        $alert = [
            'type' => 'success',
            'message' => 'Welcome back, ' . $user->getFirstName() . '!',
        ];

        // Récupérer le rôle en majuscules pour la comparaison
        $role = strtoupper($user->getRole());
        $session->set('user_role', $role);
       
        
        // Rediriger en fonction du rôle
        if ($role === 'ADMIN') {
            return $this->redirectToRoute('app_dashboard');
        } else {
            return $this->redirectToRoute('app_home');
        }
    }

    return $this->render('login/index.html.twig', [
        'alert' => $alert,
        'email' => $email, // Pré-remplir le champ email avec la valeur de la query string
    ]);
}*/


/*#[Route('/login', name: 'app_login', methods: ['GET', 'POST'])]
public function login(Request $request, EntityManagerInterface $entityManager, SessionInterface $session): Response
{
    $alert = null;

    // Récupérer l'email depuis la query string (GET) ou laisser vide par défaut
    $email = $request->query->get('email', '');

    if ($request->isMethod('POST')) {
        $email = $request->request->get('member-login-number');
        $password = $request->request->get('member-login-password');
        $faceDescriptor = $request->request->get('faceDescriptor'); // Récupérer le descripteur de visage
        $rememberMe = $request->request->get('_remember_me'); // Récupérer la valeur de la case "Remember Me"

        // Rechercher l'utilisateur par email
        $user = $entityManager->getRepository(User::class)->findOneBy(['email' => $email]);

        if (!$user) {
            $alert = [
                'type' => 'error',
                'message' => 'Invalid email. Please try again.',
            ];
            return $this->render('login/index.html.twig', [
                'alert' => $alert,
                'email' => $email, // Pré-remplir le champ email avec la valeur saisie
            ]);
        }

        // Vérifier si le compte est bloqué
        if ($user->getBlocked() === 1) {
            $alert = [
                'type' => 'error',
                'message' => 'Your Account is blocked by the Admin.',
            ];
            return $this->render('login/blockedPage.html.twig', [
                'alert' => $alert,
            ]);
        }

        // Vérifier si un descripteur de visage est fourni
        if ($faceDescriptor) {
            $storedDescriptor = json_decode($user->getFaceDescriptor(), true);

            if (!$storedDescriptor || !$this->compareDescriptors(json_decode($faceDescriptor, true), $storedDescriptor)) {
                $alert = [
                    'type' => 'error',
                    'message' => 'Face not recognized. Please try again.',
                ];
                return $this->render('login/index.html.twig', [
                    'alert' => $alert,
                    'email' => $email, // Pré-remplir le champ email avec la valeur saisie
                ]);
            }
        } 
        else {
            // Si aucun descripteur de visage n'est fourni, vérifier le mot de passe
            $hashedPassword = hash('sha256', $password);
           
            if ($user->getMdp() !== $hashedPassword) {
                // Récupérer le compteur de tentatives depuis la session
                $failedAttempts = $session->get('failed_attempts', 0);
                $failedAttempts++;
                $session->set('failed_attempts', $failedAttempts); // Mettre à jour le compteur dans la session
            
                if ($failedAttempts >= 3) {
                    // Réinitialiser le compteur après 3 tentatives
                    $session->set('failed_attempts', 0);
                    //dd($request->request->get('capturedPhoto'));
                
                    // Ajouter une variable pour signaler au frontend de capturer la photo
                    $uploadsDirectory = $this->getParameter('kernel.project_dir') . '/public/assets';
                    $photoFilename = 'intruder-' . uniqid() . '.png';
                
                    // Utiliser une image par défaut si aucune photo n'est capturée
                    $defaultPhotoPath = $uploadsDirectory . '/default-intruder.png';
                    if (!file_exists($defaultPhotoPath)) {
                        // Assurez-vous qu'une image par défaut existe
                        file_put_contents($defaultPhotoPath, base64_decode('...')); // Remplacez '...' par les données base64 de l'image par défaut
                    }
                
                    try {
                        // Envoyer un email au propriétaire du compte
                         // Déterminer la salutation en fonction du genre
                        $salutation = ($user->getGenre() === 'female') ? 'Hello Madam' : 'Hello Mr';
                        $transport = Transport::fromDsn('smtp://dhiabouslimi80@gmail.com:rvymwmvfofvnsuil@smtp.gmail.com:587');
                        $mailer = new Mailer($transport);
                
                        $emailMessage = (new Email());
                        $emailMessage->from('dhiabouslimi80@gmail.com');
                        $emailMessage->to($user->getEmail());
                        $emailMessage->subject('Suspicious Login Attempt');
                        $emailMessage->text(
                                $salutation . " " . $user->getFirstName() . ",\n\n" .
                                "We detected multiple failed login attempts to your account. Please find the attached photo of the person attempting to access your account.\n\n" .
                                "If this was not you, please secure your account immediately.\n\n" .
                                "Best regards,\nEventify\nNour Bouslimi\nHead of Communications\nHexadevs Group\nEventify Application"
                        );
                        $emailMessage->attachFromPath($defaultPhotoPath, 'intruder.png');
                
                        $mailer->send($emailMessage);
                
                        $alert = [
                            'type' => 'success',
                            'message' => 'An email has been sent to the account owner with the intruder\'s photo.',
                        ];
                    } catch (\Exception $e) {
                        $this->addFlash('error', 'Failed to send the email with the intruder photo.');
                    }
                
                    return $this->render('login/index.html.twig', [
                        'alert' => [
                            'type' => 'error',
                            'message' => 'Invalid password. Please try again.',
                        ],
                        'email' => $email, // Pré-remplir le champ email avec la valeur saisie
                        'capturePhoto' => true, // Signal pour capturer la photo
                    ]);
                }
            
                return $this->render('login/index.html.twig', [
                    'alert' => [
                        'type' => 'error',
                        'message' => 'Invalid password. Please try again.',
                    ],
                    'email' => $email, // Pré-remplir le champ email avec la valeur saisie
                    'capturePhoto' => false, // Pas de capture
                ]);
            }
        }

        // Stocker les informations de l'utilisateur dans la session
        $session->set('user_id', $user->getId());
        $session->set('user_name', $user->getFirstName());
        $session->set('user_email', $user->getEmail());
        $session->set('user_role', $user->getRole());

        // Vérifier si la session est bien remplie
        if (!$session->has('user_id') || !$session->has('user_name') || !$session->has('user_email')) {
            $alert = [
                'type' => 'error',
                'message' => 'An error occurred while creating your session. Please try again.',
            ];
            return $this->render('login/index.html.twig', [
                'alert' => $alert,
                'email' => $email, // Pré-remplir le champ email avec la valeur saisie
            ]);
        }

        // Ajouter un cookie "Remember Me" si la case est cochée
        if ($rememberMe) {
            $response = $this->redirectToRoute('app_home'); // Redirection après connexion
            $cookie = new \Symfony\Component\HttpFoundation\Cookie(
                'REMEMBER_ME', // Nom du cookie
                json_encode(['email' => $email, 'password' => $password]), // Contenu du cookie
                time() + (7 * 24 * 60 * 60), // Expiration : 7 jours
                '/', // Chemin
                null, // Domaine
                false, // HTTPS uniquement
                true, // HTTPOnly
                false, // Raw
                'lax' // SameSite
            );
            $response->headers->setCookie($cookie);
            return $response;
        }

        // Ajouter un message de succès
        $alert = [
            'type' => 'success',
            'message' => 'Welcome back, ' . $user->getFirstName() . '!',
        ];

        // Récupérer le rôle en majuscules pour la comparaison
        $role = strtoupper($user->getRole());

        // Rediriger en fonction du rôle
        if ($role === 'ADMIN') {
            return $this->redirectToRoute('app_dashboard');
        } else {
            return $this->redirectToRoute('app_home');
        }
    }

    return $this->render('login/index.html.twig', [
        'alert' => $alert,
        'email' => $email, // Pré-remplir le champ email avec la valeur de la query string
    ]);
}*/
#[Route('/login', name: 'app_login', methods: ['GET', 'POST'])]
public function login(Request $request, EntityManagerInterface $entityManager, SessionInterface $session): Response
{
    $alert = null;
    $capturePhoto = false; // Initialiser à false par défaut

    // Récupérer l'email depuis la query string (GET) ou laisser vide par défaut
    $email = $request->query->get('email', '');

    if ($request->isMethod('POST')) {
        $email = $request->request->get('member-login-number');
        $password = $request->request->get('member-login-password');
        $faceDescriptor = $request->request->get('faceDescriptor'); // Récupérer le descripteur de visage
        $rememberMe = $request->request->get('_remember_me'); // Récupérer la valeur de la case "Remember Me"
        
        // Vérifier si une photo a été capturée et envoyée
        $capturedPhoto = $request->request->get('capturedPhoto');
        $photoSubmission = $request->request->get('photoSubmission');

        // Rechercher l'utilisateur par email
        $user = $entityManager->getRepository(User::class)->findOneBy(['email' => $email]);

        if (!$user) {
            $alert = [
                'type' => 'error',
                'message' => 'Invalid email. Please try again.',
            ];
            return $this->render('login/index.html.twig', [
                'alert' => $alert,
                'email' => $email, // Pré-remplir le champ email avec la valeur saisie
            ]);
        }

        // Vérifier si le compte est bloqué
        if ($user->getBlocked() === 1) {
            $alert = [
                'type' => 'error',
                'message' => 'Your Account is blocked by the Admin.',
            ];
            return $this->render('login/blockedPage.html.twig', [
                'alert' => $alert,
            ]);
        }

        // Vérifier si un descripteur de visage est fourni
        if ($faceDescriptor) {
            $storedDescriptor = json_decode($user->getFaceDescriptor(), true);

            if (!$storedDescriptor || !$this->compareDescriptors(json_decode($faceDescriptor, true), $storedDescriptor)) {
                $alert = [
                    'type' => 'error',
                    'message' => 'Face not recognized. Please try again.',
                ];
                return $this->render('login/index.html.twig', [
                    'alert' => $alert,
                    'email' => $email, // Pré-remplir le champ email avec la valeur saisie
                ]);
            }
        } else {
            // Si aucun descripteur de visage n'est fourni, vérifier le mot de passe
            $hashedPassword = hash('sha256', $password);

            if ($user->getMdp() !== $hashedPassword) {
                // Gérer la soumission avec photo capturée
                if ($photoSubmission === 'true' && $capturedPhoto) {
                    // Traiter la photo capturée après 3 tentatives infructueuses
                    $this->sendSecurityAlert($user, $capturedPhoto);
                    
                    return $this->render('login/index.html.twig', [
                        'alert' => [
                            'type' => 'warning',
                            'message' => 'For security reasons, we have sent an alert to the account owner.',
                        ],
                        'email' => $email, // Pré-remplir le champ email avec la valeur saisie
                    ]);
                }
                
                // Si c'est une soumission normale (pas de photo)
                // Récupérer le compteur de tentatives depuis la session
                $failedAttempts = $session->get('failed_attempts', 0);
                $failedAttempts++;
                $session->set('failed_attempts', $failedAttempts); // Mettre à jour le compteur dans la session

                if ($failedAttempts >= 3) {
                    // Réinitialiser le compteur après 3 tentatives
                    $session->set('failed_attempts', 0);
                    
                    // Activer la capture photo
                    $capturePhoto = true;
                    
                    return $this->render('login/index.html.twig', [
                        'alert' => [
                            'type' => 'error',
                            'message' => 'Invalid password. Please try again.',
                        ],
                        'email' => $email, // Pré-remplir le champ email avec la valeur saisie
                        'capturePhoto' => $capturePhoto, // Signal pour capturer la photo
                    ]);
                }

                return $this->render('login/index.html.twig', [
                    'alert' => [
                        'type' => 'error',
                        'message' => 'Invalid password. Please try again.',
                    ],
                    'email' => $email, // Pré-remplir le champ email avec la valeur saisie
                ]);
            }
        }

        // Stocker les informations de l'utilisateur dans la session
        $session->set('user_id', $user->getId());
        $session->set('user_name', $user->getFirstName());
        $session->set('user_email', $user->getEmail());
        $session->set('user_role', $user->getRole());

        // Ajouter un cookie "Remember Me" si la case est cochée
        if ($rememberMe) {
            $response = $this->redirectToRoute('app_home'); // Redirection après connexion
            $cookie = new \Symfony\Component\HttpFoundation\Cookie(
                'REMEMBER_ME', // Nom du cookie
                json_encode(['email' => $email, 'password' => $password]), // Contenu du cookie
                time() + (7 * 24 * 60 * 60), // Expiration : 7 jours
                '/', // Chemin
                null, // Domaine
                false, // HTTPS uniquement
                true, // HTTPOnly
                false, // Raw
                'lax' // SameSite
            );
            $response->headers->setCookie($cookie);
            return $response;
        }

        // Ajouter un message de succès
        $alert = [
            'type' => 'success',
            'message' => 'Welcome back, ' . $user->getFirstName() . '!',
        ];

        // Récupérer le rôle en majuscules pour la comparaison
        $role = strtoupper($user->getRole());

        // Rediriger en fonction du rôle
        if ($role === 'ADMIN') {
            return $this->redirectToRoute('app_dashboard');
        } else {
            return $this->redirectToRoute('app_home');
        }
    }

    return $this->render('login/index.html.twig', [
        'alert' => $alert,
        'email' => $email, // Pré-remplir le champ email avec la valeur de la query string
        'capturePhoto' => $capturePhoto, // Envoyer la variable capturePhoto
    ]);
}

/**
 * Envoie un email d'alerte de sécurité avec la photo capturée
 */
private function sendSecurityAlert(User $user, string $capturedPhoto): void
{
    try {
        $salutation = ($user->getGenre() === 'female') ? 'Hello Madam' : 'Hello Mr';
        $transport = Transport::fromDsn('smtp://dhiabouslimi80@gmail.com:rvymwmvfofvnsuil@smtp.gmail.com:587');
        $mailer = new Mailer($transport);

        $emailMessage = (new Email());
        $emailMessage->from('dhiabouslimi80@gmail.com');
        $emailMessage->to($user->getEmail());
        $emailMessage->subject('Suspicious Login Attempt');
        
        // Traiter l'image base64 pour l'attachement
        $imageData = substr($capturedPhoto, strpos($capturedPhoto, ',') + 1);
        $decodedImage = base64_decode($imageData);
        
        // Attacher l'image à l'email
        $emailMessage->attach($decodedImage, 'suspicious_login.jpg', 'image/jpeg');
        
        $emailMessage->text(
            $salutation . " " . $user->getFirstName() . ",\n\n" .
            "We detected multiple failed login attempts to your account. Please secure your account immediately.\n\n" .
            "We have attached a photo captured during this suspicious login attempt. If this is not you, please contact our support team immediately.\n\n" .
            "Best regards,\nEventify\nNour Bouslimi\nHead of Communications\nHexadevs Group\nEventify Application"
        );
        
        // Version HTML du message avec l'image intégrée
        $emailMessage->html(
            "<p>" . $salutation . " " . $user->getFirstName() . ",</p>" .
            "<p>We detected multiple failed login attempts to your account. <strong>Please secure your account immediately.</strong></p>" .
            "<p>We have attached a photo captured during this suspicious login attempt. If this is not you, please contact our support team immediately.</p>" .
            "<p>Best regards,<br>Eventify<br>Nour Bouslimi<br>Head of Communications<br>Hexadevs Group<br>Eventify Application</p>"
        );

        $mailer->send($emailMessage);
    } catch (\Exception $e) {
        // Gérer l'erreur d'envoi sans perturber l'expérience utilisateur
        error_log('Failed to send security alert email: ' . $e->getMessage());
    }
}

//comparer faces pour la reconnaissance faciale


#[Route('/compare-faces', name: 'compare_faces', methods: ['POST'])]
public function compareFaces(Request $request, EntityManagerInterface $entityManager, SessionInterface $session): JsonResponse
{
    $data = json_decode($request->getContent(), true);
    $capturedDescriptor = $data['descriptors'] ?? null;

    if (!$capturedDescriptor) {
        return new JsonResponse(['success' => false, 'message' => 'No face descriptor provided.'], 400);
    }

    $users = $entityManager->getRepository(User::class)->findAll();

    foreach ($users as $user) {
        $storedDescriptor = json_decode($user->getFaceDescriptor(), true);

        if ($storedDescriptor && $this->compareDescriptors($capturedDescriptor, $storedDescriptor)) {
            // Stocker les informations de l'utilisateur dans la session
            $session->set('user_id', $user->getId());
            $session->set('user_name', $user->getFirstName());
            $session->set('user_email', $user->getEmail());
            $session->set('user_role', $user->getRole());

            // Vérifier le rôle de l'utilisateur
            $role = strtoupper($user->getRole());
            if ($role === 'ADMIN') {
                return new JsonResponse(['success' => true, 'redirect' => '/dashboard']);
            } else {
                return new JsonResponse(['success' => true, 'redirect' => '/home']);
            }
        }
    }

    return new JsonResponse(['success' => false, 'message' => 'Face not recognized.']);
}

private function compareDescriptors(array $captured, array $stored): bool
{
    $distance = 0;
    for ($i = 0; $i < count($captured); $i++) {
        $distance += pow($captured[$i] - $stored[$i], 2);
    }
    return sqrt($distance) < 0.6; // Seuil de tolérance
}
    // forgot password


    #[Route('/forgot-password', name: 'app_forgot_password', methods: ['GET', 'POST'])]
    public function forgotPassword(Request $request, EntityManagerInterface $entityManager, MailerInterface $mailer, SessionInterface $session, LoggerInterface $logger): Response
    {
        $alert = null;

        if ($request->isMethod('POST')) {
            $email = $request->request->get('forgot-password-email');
           
            $logger->info('Forgot password request received for email: ' . $email);

            // Rechercher l'utilisateur par email
            $user = $entityManager->getRepository(User::class)->findOneBy(['email' => $email]);
            
            if (!$user) {
                $logger->warning('No account found for email: ' . $email);
                $alert = [
                    'type' => 'error',
                    'message' => 'No account found with this email.',
                ];

                return $this->render('login/forgot_password.html.twig', [
                    'alert' => $alert,
                ]);
            }

            // Générer un code aléatoire
            $resetCode = random_int(100000, 999999);
            $logger->info('Generated reset code: ' . $resetCode);

            // Stocker le code et l'email dans la session
            $session->set('reset_code', $resetCode);
            $session->set('reset_email', $email);
            
            // Déterminer la salutation en fonction du genre
            $salutation = ($user->getGenre() === 'female') ? 'Hello Madam' : 'Hello Mr';
            $transport = Transport::fromDsn('smtp://dhiabouslimi80@gmail.com:rvymwmvfofvnsuil@smtp.gmail.com:587');
            $mailer = new Mailer($transport);
            // Préparer le contenu de l'email
            $emailMessage = (new Email());
            $emailMessage ->from('dhiabouslimi80@gmail');
            $emailMessage->to($user->getEmail());
            $emailMessage->subject('Password Recovery Code');
            $emailMessage->text(
                    $salutation . " " . $user->getFirstName() . " " . $user->getLastName() . ",\n\n" .
                        "We received a request to reset your password. Use this code to complete the process:\n\n" .
                        $resetCode . "\n\n" .
                        "If you did not request a password reset, please ignore this email or contact our support team.\n\n" .
                        "Best regards,\nEventify\nNour Bouslimi\nHead of Communications\nHexadevs Group\nEventify Application"
                );
                
                
            try {
                $mailer->send($emailMessage);
                $logger->info('Email sent successfully to: ' . $user->getEmail());
                
                //dd('Email sent successfully to: ' . $user->getEmail());
                
                $logger->info('Email sent successfully to: ' . $user->getEmail());
                $alert = [
                    'type' => 'success',
                    'message' => 'A reset code has been sent to your email.',
                ];

                return $this->render('login/verify_code.html.twig', [
                    'alert' => $alert,
                ]);
            } catch (\Exception $e) {
                $logger->error('Failed to send email: ' . $e->getMessage());
                $alert = [
                    'type' => 'error',
                    'message' => 'Failed to send email. Please try again later.',
                ];

                return $this->render('login/forgot_password.html.twig', [
                    'alert' => $alert,
                ]);
            }
        }

        return $this->render('login/forgot_password.html.twig', [
            'alert' => $alert,
        ]);
    }

    #[Route('/verify-code', name: 'app_verify_code', methods: ['GET', 'POST'])]
    public function verifyCode(Request $request, SessionInterface $session, LoggerInterface $logger): Response
    {
        $submittedCode = $request->request->get('verification-code');
        $storedCode = $session->get('reset_code');
        //dd($storedCode.' et'.$submittedCode);
        /*dump($storedCode, gettype($storedCode));
        dump($submittedCode, gettype($submittedCode));
        exit;*/

       // Convertir les deux valeurs en chaînes pour éviter les problèmes de type
    if ((string) $submittedCode === (string) $storedCode) {
        $logger->info('Verification code is correct.');
        return $this->render('login/reset_password.html.twig', [
            'alert' => [
                'type' => 'success',
                'message' => 'Code verified successfully. You can now reset your password.',
            ],
        ]);
    }

        $logger->warning('Verification code is incorrect.');
        return $this->render('login/verify_code.html.twig', [
            'alert' => [
                'type' => 'error',
                'message' => 'Invalid verification code. Please try again.',
            ],
        ]);
    }

    // reset password
    #[Route('/reset-password', name: 'app_reset_password', methods: ['GET', 'POST'])]
    public function resetPassword(Request $request, EntityManagerInterface $entityManager, SessionInterface $session): Response
    {
        $alert = null;

        if ($request->isMethod('POST')) {
            $newPassword = $request->request->get('new-password');
            $confirmPassword = $request->request->get('confirm-password');
            $email = $session->get('reset_email');

            // Vérifier si les mots de passe correspondent
            if ($newPassword !== $confirmPassword) {
                $alert = [
                    'type' => 'error',
                    'message' => 'Passwords do not match. Please try again.',
                ];

                return $this->render('login/reset_password.html.twig', [
                    'alert' => $alert,
                ]);
            }

            $user = $entityManager->getRepository(User::class)->findOneBy(['email' => $email]);

            if ($user) {
                $user->setMdp(hash('sha256', $newPassword)); // Utilisation de SHA-256 pour correspondre à votre méthode de hachage
                $entityManager->flush();

                $alert = [
                    'type' => 'success',
                    'message' => 'Your password has been reset successfully.',
                ];

                return $this->render('login/index.html.twig', [
                    'alert' => $alert,
                ]);
            }

            $alert = [
                'type' => 'error',
                'message' => 'An error occurred. Please try again.',
            ];
        }

        return $this->render('login/reset_password.html.twig', [
            'alert' => $alert,
        ]);
    }

    //profile

    #[Route('/profile', name: 'app_profile', methods: ['GET','POST'])]
    public function profile(SessionInterface $session, EntityManagerInterface $entityManager): Response
    {
        // Récupérer l'ID de user depuis  session
        $userId = $session->get('user_id');
        
        if (!$userId) {
            // Rediriger vers la page de connexion si l'utilisateur n'est pas connecté
            return $this->redirectToRoute('app_login');
        }

        // Récupérer les informations complètes de l'utilisateur depuis la base de données
        $user = $entityManager->getRepository(User::class)->find($userId);
        //dd($user);
        if (!$user) {
            // Gérer le cas où l'utilisateur n'existe pas dans la base de données
            return $this->redirectToRoute('app_login');
        }

        // Passer les informations de l'utilisateur à la vue
        return $this->render('base.html.twig', [
            'user' => $user,
        ]);
    }
    //update profile


    #[Route('/update-profile', name: 'app_update_profile', methods: ['GET', 'POST'])]
    public function updateProfile(Request $request, EntityManagerInterface $entityManager, SessionInterface $session): Response
    {
        // Récupérer l'ID de l'utilisateur depuis la session
        $userId = $session->get('user_id');

        if (!$userId) {
            return $this->redirectToRoute('app_login');
        }

        $user = $entityManager->getRepository(User::class)->find($userId);

        if (!$user) {
            return $this->redirectToRoute('app_login');
        }

        $alert = null;

        if ($request->isMethod('POST')) {
            // Récupérer les données du formulaire
            $firstName = $request->request->get('firstName');
            $lastName = $request->request->get('lastName');
            $dateOfBirth = $request->request->get('dateOfBirth');
            $cin = $request->request->get('cin');
            $phoneNumber = $request->request->get('phoneNumber');
            $email = $request->request->get('email');

            // Modifier les informations de l'utilisateur
            $user->setFirstName($firstName);
            $user->setLastName($lastName);
            $user->setDateNaissance(new \DateTime($dateOfBirth));
            $user->setCin($cin);
            $user->setNumTlf($phoneNumber);
            $user->setEmail($email);

            // Gérer l'image si elle est téléchargée
            /** @var UploadedFile|null $profileImage */
        $profileImage = $request->files->get('fileInput');
        $capturedPhoto = $request->request->get('capturedPhoto');
        //dd($request->request->all());
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
        } 
            // Sauvegarder les modifications dans la base de données
            $entityManager->flush();

            // Ajouter une alerte de succès
            $alert = [
                'type' => 'success',
                'message' => 'Your profile has been updated successfully.',
            ];

            // Rediriger vers la page d'accueil
            return $this->redirectToRoute('app_home');
        }

        // Passer les informations de l'utilisateur et l'alerte à la vue
        return $this->render('login/update_profile.html.twig', [
            'user' => $user,
            'alert' => $alert,
        ]);
    }

    //confirm delete account

    #[Route('/confirm-delete-account', name: 'app_confirm_delete_account', methods: ['GET'])]
    public function confirmDeleteAccount(SessionInterface $session, EntityManagerInterface $entityManager): Response
    {
        // Récupérer l'ID de l'utilisateur depuis la session
        $userId = $session->get('user_id');

        if (!$userId) {
            return $this->redirectToRoute('app_login');
        }


        $user = $entityManager->getRepository(User::class)->find($userId);

        if (!$user) {
            return $this->redirectToRoute('app_login');
        }

        // Passer les informations de l'utilisateur à la vue
        return $this->render('base.html.twig', [
            'user' => $user,
        ]);
    }

    //delete account

    #[Route('/delete-account', name: 'app_delete_account', methods: ['POST'])]
    public function deleteAccount(Request $request, EntityManagerInterface $entityManager, SessionInterface $session): Response
    {
        // Récupérer l'ID de l'utilisateur depuis la session
        $userId = $session->get('user_id');

        if (!$userId) {
            return $this->redirectToRoute('app_login');
        }

        // Récupérer l'utilisateur à supprimer
        $user = $entityManager->getRepository(User::class)->find($userId);

        if ($user) {
            // Supprimer l'utilisateur de la base de données
            $entityManager->remove($user);
            $entityManager->flush();

            // Détruire la session
            $session->invalidate();

            // Ajouter un message de succès
            $this->addFlash('success', 'Your account has been deleted successfully.');

            // Rediriger vers la page d'inscription ou d'accueil
            return $this->redirectToRoute('app_signup');
        }

        // Si l'utilisateur n'existe pas, rediriger vers la page de connexion
        return $this->redirectToRoute('app_login');
    }

    /**************************************Back office */
    //affichage et update au meme temps
    #[Route('/profileBack', name: 'app_update_profile_back', methods: ['GET', 'POST'])]
    public function updateProfileBack(Request $request, EntityManagerInterface $entityManager, SessionInterface $session): Response
    {
        // Récupérer l'ID de l'utilisateur depuis la session
        $userId = $session->get('user_id');

        if (!$userId) {
            return $this->redirectToRoute('app_login'); // Rediriger si l'utilisateur n'est pas connecté
        }

        // Récupérer l'utilisateur depuis la base de données
        $user = $entityManager->getRepository(User::class)->find($userId);


        if (!$user) {
            return $this->redirectToRoute('app_login'); // Rediriger si l'utilisateur n'existe pas
        }

        if ($request->isMethod('POST')) {
            // Récupérer les données du formulaire
            $firstName = $request->request->get('firstName');
            $lastName = $request->request->get('lastName');
            $dateOfBirth = $request->request->get('dateOfBirth');
            $cin = $request->request->get('cin');
            $phoneNumber = $request->request->get('phoneNumber');
            $email = $request->request->get('email');

            // Mettre à jour les informations de l'utilisateur
            $user->setFirstName($firstName);
            $user->setLastName($lastName);
            $user->setDateNaissance(new \DateTime($dateOfBirth));
            $user->setCin($cin);
            $user->setNumTlf($phoneNumber);
            $user->setEmail($email);

            // Gérer l'image si elle est téléchargée
            $profileImage = $request->files->get('fileInput');
            if ($profileImage) {
                $uploadsDirectory = $this->getParameter('kernel.project_dir') . '/public/assets';
                $newFilename = uniqid() . '.' . $profileImage->guessExtension();

                try {
                    $profileImage->move($uploadsDirectory, $newFilename);
                    $user->setImg('assets/' . $newFilename);
                } catch (FileException $e) {
                    $this->addFlash('error', 'Failed to upload the image.');
                }
            }

            $entityManager->flush();

            $this->addFlash('success', 'Profile updated successfully.');

            return $this->redirectToRoute('app_dashboard');
        }

        // Transmettre l'utilisateur au template
        return $this->render('profile/profileBack.html.twig', [
            'user' => $user,
        ]);
    }

    //delete account back

    #[Route('/delete-account-back', name: 'app_delete_account_back', methods: ['POST'])]
    public function deleteAccountBack(Request $request, EntityManagerInterface $entityManager, SessionInterface $session): Response
    {
        // Récupérer l'ID de l'utilisateur depuis la session
        $userId = $session->get('user_id');

        if (!$userId) {
            return $this->redirectToRoute('app_login');
        }

        // Vérifier si la case à cocher est cochée
        $isConfirmed = $request->request->get('accountActivation');
        if (!$isConfirmed) {
            $this->addFlash('error', 'You must confirm your account deletion.');
            return $this->redirectToRoute('app_update_profile_back');
        }

        // Récupérer l'utilisateur à supprimer
        $user = $entityManager->getRepository(User::class)->find($userId);

        if ($user) {
            // Supprimer l'utilisateur de la base de données
            $entityManager->remove($user);
            $entityManager->flush();

            // Détruire la session
            $session->invalidate();
            $this->addFlash('success', 'Your account has been deleted successfully.');
            return $this->redirectToRoute('app_signup');
        }


        return $this->redirectToRoute('app_login');
    }

    //read all users and pass them to staff.html.twig (je la déplacer dans dashboard controller)
    /*#[Route('/staff', name: 'app_staff', methods: ['GET'])]
public function staff(EntityManagerInterface $entityManager): Response
{
    // Récupérer tous les utilisateurs depuis la base de données
    $users = $entityManager->getRepository(User::class)->findAll();

    // Passer les utilisateurs au template
    return $this->render('staff/staff.html.twig', [
        'users' => $users,
    ]);
}
*/
    //block et unblock user
    #[Route('/user/toggle-block/{id}', name: 'app_user_toggle_block', methods: ['POST'])]
    public function toggleBlock(int $id, EntityManagerInterface $entityManager): Response
    {

        // Récupérer l'utilisateur par son ID
        $user = $entityManager->getRepository(User::class)->find($id);

        if (!$user) {
            $this->addFlash('error', 'User not found.');
            return $this->redirectToRoute('app_staff');
        }

        // Inverser l'état de l'attribut `blocked`
        $user->setBlocked(!$user->getBlocked());
        $entityManager->flush();

        // Ajouter un message de succès
        $this->addFlash('success', $user->getBlocked() ? 'User has been blocked.' : 'User has been unblocked.');

        return $this->redirectToRoute('app_staff');
    }

    //recherche de user dans le tableau

    #[Route('/staff/search', name: 'app_staff_search', methods: ['GET'])]
    public function search(Request $request, EntityManagerInterface $entityManager): JsonResponse
    {
        $searchTerm = $request->query->get('q', '');

        // Rechercher les utilisateurs correspondant au terme de recherche
        $users = $entityManager->getRepository(User::class)->createQueryBuilder('u')
            ->where('u.firstName LIKE :searchTerm OR u.lastName LIKE :searchTerm OR u.email LIKE :searchTerm')
            ->setParameter('searchTerm', '%' . $searchTerm . '%')
            ->getQuery()
            ->getResult();

        // Transformer les utilisateurs en tableau JSON
        $userData = [];
        foreach ($users as $user) {
            $userData[] = [
                'id' => (int) $user->getId(), // Forcer l'ID à être un entier
                'firstName' => $user->getFirstName(),
                'lastName' => $user->getLastName(),
                'email' => $user->getEmail(),
                'blocked' => $user->getBlocked(), // Retourne directement l'entier (0 ou 1)
                'dateOfBirth' => $user->getDateNaissance() ? $user->getDateNaissance()->format('Y-m-d') : 'N/A',
                'genre' => $user->getGenre(),
                'cin' => $user->getCin(),
                'role' => $user->getRole(),
            ];
        }

        return new JsonResponse($userData);
    }

    //filtre

    #[Route('/staff/filter', name: 'staff_filter', methods: ['GET'])]
    public function filter(Request $request, EntityManagerInterface $entityManager): JsonResponse
    {
        $filterBy = $request->query->get('filterBy');
        $users = [];

        $queryBuilder = $entityManager->getRepository(User::class)->createQueryBuilder('u');

        switch ($filterBy) {
            case 'firstName':
                $queryBuilder->orderBy('u.firstName', 'ASC');
                break;
            case 'email':
                $queryBuilder->orderBy('u.email', 'ASC');
                break;
            case 'dateOfBirth':
                $queryBuilder->orderBy('u.dateNaissance', 'ASC');
                break;
            case 'accountStatus':
                $queryBuilder->orderBy('u.blocked', 'ASC');
                break;
            default:
                return new JsonResponse($users); // Retourne une réponse vide si le filtre est invalide
        }

        $users = $queryBuilder->getQuery()->getResult();

        // Transformer les utilisateurs en tableau JSON
        $userData = [];
        foreach ($users as $user) {
            $userData[] = [
                'id' => (int) $user->getId(),
                'firstName' => $user->getFirstName(),
                'lastName' => $user->getLastName(),
                'email' => $user->getEmail(),
                'blocked' => $user->getBlocked(),
                'dateOfBirth' => $user->getDateNaissance() ? $user->getDateNaissance()->format('Y-m-d') : 'N/A',
                'genre' => $user->getGenre(),
                'cin' => $user->getCin(),
                'role' => $user->getRole(),
            ];
        }

        return new JsonResponse($userData);
    }


    //export excel


    #[Route('/staff/export', name: 'staff_export', methods: ['GET'])]
    public function export(EntityManagerInterface $entityManager): StreamedResponse
    {

        $users = $entityManager->getRepository(User::class)->findAll();

        // Créer un nouveau fichier Excel
        $spreadsheet = new Spreadsheet();
        $sheet = $spreadsheet->getActiveSheet();

        // Ajouter les en-têtes
        $sheet->setCellValue('A1', 'First Name');
        $sheet->setCellValue('B1', 'Last Name');
        $sheet->setCellValue('C1', 'Email');
        $sheet->setCellValue('D1', 'Date of Birth');
        $sheet->setCellValue('E1', 'Status');
        $sheet->setCellValue('F1', 'Role');
        $sheet->setCellValue('G1', 'Gender');
        $sheet->setCellValue('H1', 'Cin');
        $sheet->setCellValue('I1', 'Phone Number');

        // Ajouter les données des utilisateurs
        $row = 2;
        foreach ($users as $user) {
            $sheet->setCellValue('A' . $row, $user->getFirstName());
            $sheet->setCellValue('B' . $row, $user->getLastName());
            $sheet->setCellValue('C' . $row, $user->getEmail());
            $sheet->setCellValue('D' . $row, $user->getDateNaissance() ? $user->getDateNaissance()->format('Y-m-d') : 'N/A');
            $sheet->setCellValue('E' . $row, $user->getBlocked() ? 'Blocked' : 'Active');
            $sheet->setCellValue('F' . $row, $user->getRole());
            $sheet->setCellValue('G' . $row, $user->getGenre());
            $sheet->setCellValue('H' . $row, $user->getCin());
            $sheet->setCellValue('I' . $row, $user->getNumTlf());
            $row++;
        }

        // Créer une réponse pour télécharger le fichier
        $response = new StreamedResponse(function () use ($spreadsheet) {
            $writer = new Xlsx($spreadsheet);
            $writer->save('php://output');
        });

        $response->headers->set('Content-Type', 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
        $response->headers->set('Content-Disposition', 'attachment;filename="users.xlsx"');
        $response->headers->set('Cache-Control', 'max-age=0');

        return $response;
    }
}
