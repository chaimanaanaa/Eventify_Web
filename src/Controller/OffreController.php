<?php

namespace App\Controller;

use App\Entity\Offre;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

use App\Entity\User;

use Symfony\Component\HttpFoundation\Request;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Contracts\HttpClient\HttpClientInterface; // Correction de l'import



use App\Entity\Organisateur;
use App\Repository\OfferRepository; // Notez le changement de "Offer" à "Offre"

use Symfony\Component\Validator\Validator\ValidatorInterface;



/// zidha lil ai agent
use Symfony\Component\HttpClient\HttpClient;

final class OffreController extends AbstractController{
     /*#[Route('/offre', name: 'app_offre')]
    public function index(): Response
    {
        return $this->render('offre/index.html.twig', [
            'controller_name' => 'OffreController',
        ]);
    }*/



/****************************************
 * *********Ajouter Offre ***************
 ****************************************/
private function rechercheUser(int $id, EntityManagerInterface $entityManager): ?User
{
    return $entityManager->getRepository(User::class)->find($id);
}
/*
// fonction il ajout li base de donnees 
#[Route('/offre/add', name: 'add_offre', methods: ["POST"])]
public function addOffre(Request $request, EntityManagerInterface $entityManager): JsonResponse
{
    $data = json_decode($request->getContent(), true);
    
    // Validation des données requises
    if (!isset($data['description']) || !isset($data['objet']) || !isset($data['type_evennement']) || 
        !isset($data['dateDebutEvenement']) || !isset($data['dateFinEvenement']) || 
        !isset($data['lieuEvenement']) || !isset($data['budget']) || !isset($data['nombreInvite'])) {
        return new JsonResponse(["message" => "Tous les champs obligatoires doivent être remplis."], 400);
    }

    $offre = new Offre();
    $user = $this->rechercheUser(9, $entityManager); // Vous devriez utiliser l'utilisateur connecté
    if (!$user) {
        return new JsonResponse(["message" => "Utilisateur non trouvé."], 404);
    }

    try {
        $offre->setUser($user);
        $offre->setDescription($data['description']);
        $offre->setObjet($data['objet']);
        $offre->setStatu("pending");
        $offre->setDateDemande(new \DateTime());
        $offre->setTypeEvenement($data['type_evennement']);
        $offre->setDateDebutEvenement(($data['dateDebutEvenement']));
        $offre->setDateFinEvenement(($data['dateFinEvenement']));
        $offre->setLieuEvenement($data['lieuEvenement']);
        $offre->setBudget((float)$data['budget']);
        $offre->setNombreInvite((int)$data['nombreInvite']);

        $entityManager->persist($offre);
        $entityManager->flush();
        
        return new JsonResponse(["message" => "Offre ajoutée avec succès."], 200);
    } catch (\Exception $e) {
        return new JsonResponse(["message" => "Erreur lors de l'ajout de l'offre: " . $e->getMessage()], 500);
    }
}*/

#[Route('/offre/add', name: 'add_offre', methods: ["POST"])]
public function addOffre(Request $request, EntityManagerInterface $entityManager, ValidatorInterface $validator): JsonResponse
{
    try {
        $data = json_decode($request->getContent(), true);
        if (!$data) {
            return new JsonResponse(['message' => 'Données JSON invalides'], 400);
        }

        $offre = new Offre();
        $user = $this->rechercheUser(9, $entityManager); // TODO: Use authenticated user
        if (!$user) {
            return new JsonResponse(["message" => "Utilisateur non trouvé"], 404);
        }

        $offre->setUser($user);
        $offre->setDescription($data['description'] ?? '');
        $offre->setStatu("pending");
        $offre->setObjet($data['objet'] ?? '');
        $offre->setTypeEvenement($data['type_evennement'] ?? '');
        $offre->setDateDebutEvenement($data['dateDebutEvenement'] ?? '');
        $offre->setDateFinEvenement($data['dateFinEvenement'] ?? '');
        $offre->setLieuEvenement($data['lieuEvenement'] ?? '');
        $offre->setBudget($data['budget'] !== null ? (float)$data['budget'] : null);
        $offre->setNombreInvite($data['nombreInvite'] !== null ? (int)$data['nombreInvite'] : null);

        $errors = $validator->validate($offre);
        if (count($errors) > 0) {
            $errorMessages = [];
            foreach ($errors as $error) {
                $field = $error->getPropertyPath();
                $errorMessages[$field] = $error->getMessage();
            }
            return new JsonResponse(['message' => 'Erreur de validation', 'errors' => $errorMessages], 400);
        }

        $entityManager->persist($offre);
        $entityManager->flush();

        return new JsonResponse(["message" => "Offre ajoutée avec succès"], 200);
    } catch (\Exception $e) {
        error_log('Erreur serveur : ' . $e->getMessage());
        return new JsonResponse(['message' => 'Erreur serveur: ' . $e->getMessage()], 500);
    }
}



/*************************
* Api generate with ai ***
*************************/
private $filePath;// taba3 il specialite

private $httpClient;
private $geminiApiKey = 'AIzaSyCboapWyan6YYgrunXiI1WsrQxkioPpL7E'; // À sécuriser en production

public function __construct(HttpClientInterface $httpClient)
{

$this->filePath = __DIR__ . '/../../public/filesOrganisateur/specialities.txt'; // taba3 il specialite

//Créer le fichier s'il n'existe pas taba3 il specialite 
if (!file_exists($this->filePath)) {
    file_put_contents($this->filePath, '');
}


$this->httpClient = $httpClient;
}

#[Route('/offre/generate-ai', name: 'generate_ai_description', methods: ["POST"])]
public function generateAiDescription(Request $request): JsonResponse
{
 $data = json_decode($request->getContent(), true);
 $subject = $data['subject'] ?? '';

 if (empty($subject)) {
     return new JsonResponse(['error' => 'Subject is required'], 400);
 }

 try {
     $response = $this->httpClient->request('POST', 
         'https://generativelanguage.googleapis.com/v1beta/models/gemini-2.0-flash:generateContent?key='.$this->geminiApiKey, [
             'json' => [
                 'contents' => [
                     [
                         'parts' => [
                             [
                                 'text' => "Explain how the $subject will be organized, including the number of people, the price, and the meals, in 3 lines."
                             ]
                         ]
                     ]
                 ]
             ],
             'headers' => [
                 'Content-Type' => 'application/json',
             ],
         ]);

     $content = $response->toArray();
     $description = $content['candidates'][0]['content']['parts'][0]['text'] ?? 'Could not generate description';

     return new JsonResponse(['description' => $description]);
 } catch (\Exception $e) {
     return new JsonResponse(['error' => 'Failed to generate description: '.$e->getMessage()], 500);
 }
}


/****************************************
* Analyse Weather ************************
*****************************************/




#[Route('/offre/weather', name: 'weather_analysis', methods: ["POST"])]
public function weatherAnalysis(Request $request): JsonResponse
{
 $data = json_decode($request->getContent(), true);
 $startDate = $data['startDate'] ?? null;
 $endDate = $data['endDate'] ?? null;

 if (!$startDate || !$endDate) {
     //return new JsonResponse(['error' => 'Start date and end date are required'], 400);
     return new JsonResponse(['error' => '🤷 Inconnu'], 400);
 }

 try {
     $apiUrl = "https://api.open-meteo.com/v1/forecast";
     $url = $apiUrl . "?latitude=36.8665&longitude=10.1647&daily=weathercode" .
            "&timezone=Africa/Tunis&start_date=" . $startDate . "&end_date=" . $endDate;

     $response = $this->httpClient->request('GET', $url);

       // Vérifier le code de statut de la réponse
    if ($response->getStatusCode() !== 200) {
        return new JsonResponse(['error' => '🤷 Inconnu'], 400);
    }



     $content = $response->toArray();

     $weatherCodes = $content['daily']['weathercode'] ?? [];
     $weatherResults = [];

     foreach ($weatherCodes as $index => $code) {
         $weatherResults[] = "Jour " . ($index + 1) . ": " . $this->interpretWeatherCode($code);
     }

     return new JsonResponse(['weatherData' => $weatherResults]);
 } catch (\Exception $e) {
    // return new JsonResponse(['error' => 'Failed to fetch weather data: ' . $e->getMessage()], 500);
    return new JsonResponse(['error' => '🤷 Inconnu'], 500);
 }
}

private function interpretWeatherCode(int $code): string
{
 static $weatherMap = [
     0 => '☀️ Ensoleillé',
     1 => '🌤️ Principalement clair',
     2 => '⛅ Partiellement nuageux',
     3 => '☁️ Nuageux',
     4 => '🌫️ Brouillard',
     5 => '🌧️ Pluie légère',
     6 => '🌧️ Pluie modérée',
     7 => '🌧️ Pluie forte',
     8 => '🌧️ Averse de pluie',
     9 => '🌧️ Pluie verglaçante',
     10 => '❄️ Neige légère',
     11 => '❄️ Neige modérée',
     12 => '❄️ Neige forte',
     13 => '❄️ Averse de neige',
     14 => '🌨️ Tempête de neige',
     15 => '🌧️ Pluie et neige mélangées légères',
     16 => '🌧️ Pluie et neige mélangées modérées',
     17 => '🌧️ Pluie et neige mélangées fortes',
     18 => '🌨️ Neige fondante',
     19 => '🌫️ Brouillard givrant',
     20 => '🌨️ Neige fondante légère',
     21 => '🌨️ Neige fondante modérée',
     22 => '🌨️ Neige fondante forte',
     23 => '🌧️ Averse de pluie et neige mélangées',
     24 => '🌧️ Averse de pluie',
     25 => '🌧️ Averse de neige',
     26 => '🌧️ Pluie verglaçante',
     27 => '🌩️ Orages avec pluie légère',
     28 => '🌩️ Orages avec pluie modérée',
     29 => '🌩️ Orages avec pluie forte',
     30 => '⛈️ Orages avec des averses de pluie et de neige',
     31 => '🌨️ Tempête de neige et pluie',
     32 => '⛈️ Orage avec pluie forte et vent',
     33 => '🌧️ Averse de pluie et neige',
     34 => '❄️ Neige légère et vent',
     35 => '❄️ Neige modérée et vent',
     36 => '❄️ Neige forte et vent',
     37 => '⛈️ Orage avec neige et pluie',
     38 => '⛅ Partiellement nuageux avec vent modéré',
     39 => '🌫️ Brouillard avec faible visibilité',
     40 => '🌧️ Pluie intermittente',
     41 => '🌨️ Neige intermittente',
     42 => '🌧️ Averses de pluie et neige intermittentes',
     43 => '🌧️ Pluie froide',
     44 => '🌨️ Neige froide',
     45 => '🌧️ Pluie modérée et vent fort',
     46 => '❄️ Neige forte et vent fort',
     47 => '🌧️ Pluie forte et vent modéré',
     48 => '🌨️ Tempête de neige avec vent',
     49 => '🌨️ Tempête de neige et pluie avec vent',
     50 => '🌨️ Pluie et neige mélangées et vent fort',
     51 => '🌧️ Averse légère',
     52 => '🌧️ Averse modérée',
     53 => '🌧️ Averse forte',
     54 => '🌨️ Averse de neige légère',
     55 => '🌨️ Averse de neige modérée',
     56 => '🌨️ Averse de neige forte',
     57 => '🌨️ Neige fondante avec faible visibilité',
     58 => '🌨️ Neige fondante avec bonne visibilité',
     59 => '⛅ Partiellement nuageux avec bonne visibilité',
     60 => '🌨️ Tempête de neige et pluie faible',
     61 => '🌧️ Averse faible et neige',
     62 => '🌧️ Averse modérée et neige',
     63 => '🌧️ Averse forte et neige',
     64 => '🌨️ Neige faible',
     65 => '🌨️ Neige modérée',
     66 => '🌨️ Neige forte',
     67 => '🌨️ Averse de neige et vent',
     68 => '🌨️ Averse de neige et pluie',
     69 => '🌧️ Averse de pluie et neige',
     70 => '❄️ Tempête de neige',
     71 => '❄️ Averse de neige légère',
     72 => '❄️ Averse de neige modérée',
     73 => '❄️ Averse de neige forte',
     74 => '🌧️ Pluie légère et vent modéré',
     75 => '🌧️ Pluie forte et vent modéré',
     76 => '🌧️ Averse de pluie et vent',
     77 => '⛈️ Orage avec neige',
     78 => '⛅ Partiellement nuageux avec faible visibilité',
     79 => '🌨️ Tempête de neige',
     80 => '🌧️ Averse de pluie modérée',
     81 => '🌧️ Averse de pluie forte',
     82 => '🌧️ Averse de pluie et neige',
     83 => '⛅ Partiellement nuageux avec neige',
     84 => '⛅ Partiellement nuageux avec forte pluie',
     85 => '🌧️ Averse de pluie et neige',
     86 => '🌧️ Averse de neige',
     87 => '🌧️ Averse de neige et pluie',
     88 => '🌧️ Pluie et neige modérées',
     89 => '🌧️ Pluie et neige fortes',
     90 => '🌩️ Orage avec pluie forte',
     91 => '⛈️ Orages avec vent modéré',
     92 => '⛈️ Orages avec pluie légère et vent',
     93 => '🌧️ Averse de pluie forte et neige',
     94 => '🌧️ Pluie et neige faibles',
     95 => '⛈️ Orage avec pluie et neige',
     96 => '⛈️ Orages forts avec pluie',
     97 => '⛈️ Orages forts avec vent',
     98 => '🌨️ Tempête de neige et vent',
     99 => '⛈️ Orages avec pluie et vent modéré',
 ];

 // Retourne la correspondance si trouvée, sinon "Inconnu"
 return $weatherMap[$code] ?? '🤷 Inconnu';
}







/****************************************
* *********Afficher Offre Feont where id ure houwa il session ***************
****************************************/
#[Route('/consulterYourRequest', name: 'app_offers')]
public function indexs(EntityManagerInterface $entityManager): Response
{

$user = $this->rechercheUser(9, $entityManager); // Vous devriez utiliser l'utilisateur connecté

if (!$user) {
    throw $this->createAccessDeniedException('User not authenticated.');
}

$offreRepository = $entityManager->getRepository(Offre::class);

/*  return $this->render('offers/afficherOffreFront.html.twig', [
    'pending_offers' => $offreRepository->findBy(['statu' => 'pending']),
    'treated_offers' => $offreRepository->findBy(['statu' => 'treated']),
]);*/

return $this->render('offers/afficherOffreFront.html.twig', [
    'pending_offers' => $offreRepository->findBy([ 'statu' => 'pending','user' => $user, ]),
    'treated_offers' => $offreRepository->findBy([ 'statu' => 'treated','user' => $user,  ]),
]);
}



/********************************************************************************
* *********Delete Offre fil client : yitbadal etat offre cancled  ***************
*******************************************************************************/
#[Route('/offre/cancel/{id}', name: 'cancel_offre', methods: ["POST"])]
public function cancelOffre(int $id, EntityManagerInterface $entityManager): JsonResponse
{
$offre = $entityManager->getRepository(Offre::class)->find($id);

if (!$offre) {
    return new JsonResponse(['success' => false, 'message' => 'Offer not found'], 404);
}

try {
    $offre->setStatu('canceled');
    $entityManager->flush();
    
    return new JsonResponse(['success' => true, 'message' => 'Request canceled successfully']);
} catch (\Exception $e) {
    return new JsonResponse(['success' => false, 'message' => 'Error canceling request: ' . $e->getMessage()], 500);
}
}


/********************************************************************************
* *********Modifier Offre ***************
*******************************************************************************/

/*private $filePath;
/*
public function __construct()
{
//// Initialiser le chemin du fichier
$this->filePath = __DIR__ . '/../../public/filesOrganisateur/specialities.txt';

//// Créer le fichier s'il n'existe pas
if (!file_exists($this->filePath)) {
    file_put_contents($this->filePath, '');
}
}*/
// bich yimchi lil page modifier
#[Route(path: '/ModifyYourRequest', name: 'app_ModifyYourRequest')]
public function modifierOffrePage(Request $request, EntityManagerInterface $entityManager): Response
{

 // Lire les spécialités depuis le fichier
 $specialites = file($this->filePath, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);

// Récupérer l'ID depuis la requête POST
$offerId = $request->request->get('id');

if (!$offerId) {
    throw $this->createNotFoundException('ID de l\'offre non spécifié.');
}

// Récupérer l'offre par son ID
$offer = $entityManager->getRepository(Offre::class)->find($offerId);

if (!$offer) {
    throw $this->createNotFoundException('Offre non trouvée.');
}

// Passer les données de l'offre et les spécialités à la vue Twig
return $this->render('offers/modifierOffreFront.html.twig', [
    'offre' => $offer,
    'specialites' => $specialites,
]);

}

/// fonction ili itmodifi fil base

/*
#[Route('/offre/edit/{id}', name: 'edit_offre', methods: ["PUT"])]
public function editOffre(int $id, Request $request, EntityManagerInterface $entityManager): JsonResponse
{
    // Récupérer les données envoyées par le client
    $data = json_decode($request->getContent(), true);

    // Rechercher l'offre par son ID
    $offre = $entityManager->getRepository(Offre::class)->find($id);

    if (!$offre) {
        return new JsonResponse(["message" => "Offre non trouvée."], 404);
    }

   

    try {
        // Mettre à jour les propriétés de l'offre
        $offre->setDescription($data['description']);
        $offre->setObjet($data['objet']);
        $offre->setTypeEvenement($data['type_evennement']);
        $offre->setDateDebutEvenement(($data['dateDebutEvenement']));
        $offre->setDateFinEvenement(($data['dateFinEvenement']));
        $offre->setLieuEvenement($data['lieuEvenement']);
        $offre->setBudget((float)$data['budget']);
        $offre->setNombreInvite((int)$data['nombreInvite']);
        $offre->setStatu("pending"); // Ajouter ou conserver un statut par défaut
        $offre->setDateDemande(new \DateTime());

        // Sauvegarder les modifications dans la base de données
        $entityManager->flush();

        return new JsonResponse(["message" => "Offre modifiée avec succès."], 200);
    } catch (\Exception $e) {
        error_log($e->getMessage());
        return new JsonResponse(["message" => "Erreur lors de la modification de l'offre.", "error" => $e->getMessage()], 500);
    }
}
*/


#[Route('/offre/edit/{id}', name: 'edit_offre', methods: ["PUT"])]
    public function editOffre(int $id, Request $request, EntityManagerInterface $entityManager, ValidatorInterface $validator): JsonResponse
    {
        try {
            // Récupérer les données envoyées par le client
            $data = json_decode($request->getContent(), true);
            if (!$data) {
                return new JsonResponse(['message' => 'Données JSON invalides'], 400);
            }

            // Rechercher l'offre par son ID
            $offre = $entityManager->getRepository(Offre::class)->find($id);
            if (!$offre) {
                return new JsonResponse(["message" => "Offre non trouvée"], 404);
            }

            // Mettre à jour les propriétés de l'offre
            $offre->setObjet($data['objet'] ?? $offre->getObjet());
            $offre->setDescription($data['description'] ?? $offre->getDescription());
            $offre->setTypeEvenement($data['type_evennement'] ?? $offre->getTypeEvenement());
            $offre->setLieuEvenement($data['lieuEvenement'] ?? $offre->getLieuEvenement());
            $offre->setDateDebutEvenement($data['dateDebutEvenement'] ?? $offre->getDateDebutEvenement());
            $offre->setDateFinEvenement($data['dateFinEvenement'] ?? $offre->getDateFinEvenement());
            $offre->setBudget($data['budget'] !== null && $data['budget'] !== '' ? (float)$data['budget'] : $offre->getBudget());
            $offre->setNombreInvite($data['nombreInvite'] !== null && $data['nombreInvite'] !== '' ? (int)$data['nombreInvite'] : $offre->getNombreInvite());
            $offre->setStatu("pending");
            $offre->setDateDemande(new \DateTime());

            // Valider l'entité
            $errors = $validator->validate($offre);
            if (count($errors) > 0) {
                $errorMessages = [];
                foreach ($errors as $error) {
                    $field = $error->getPropertyPath();
                    $errorMessages[$field] = $error->getMessage();
                }
                return new JsonResponse(['message' => 'Erreur de validation', 'errors' => $errorMessages], 400);
            }

            // Sauvegarder les modifications
            $entityManager->flush();

            return new JsonResponse(["message" => "Offre modifiée avec succès"], 200);
        } catch (\Exception $e) {
            error_log('Erreur serveur : ' . $e->getMessage());
            return new JsonResponse(['message' => 'Erreur serveur: ' . $e->getMessage()], 500);
        }
    }

/**************        CRUD  affichage detail d un organisateur  lorsque traite offre      ***************************************
*************************************************************************
************************************************************************/
#[Route('/AffichetgeOrgOffreTraite/{id}', name: 'app_AffichetgeOrgOffreTraite_details', methods: ["GET"])]
public function getOrganisateurDetails(int $id, EntityManagerInterface $entityManager): JsonResponse
{
    // Récupérer l'organisateur depuis la base de données
    $organisateur = $entityManager->getRepository(Organisateur::class)->find($id);

    if (!$organisateur) {
        return new JsonResponse(["message" => "Organisateur non trouvé."], 404);
    }

    // Retourner les détails de l'organisateur en JSON
    return new JsonResponse([
        "id" => $organisateur->getId(),
        "nom" => $organisateur->getNomOrg(),
        "prenom" => $organisateur->getPrenomOrg(),
        "email" => $organisateur->getEmailOrg(),
        "telephone" => $organisateur->getNumTel(),
        "city" => $organisateur->getCity(),
        "date_naissance" => $organisateur->getDateNaissance(),
        "specialite" => $organisateur->getSpecialite(),
        "experience" => $organisateur->getNbexp(),
        "salaire" => $organisateur->getSalaire(),
        "etat" => $organisateur->getStatut(),
        "employment" => $organisateur->getEmployment(),
        "langues" => $organisateur->getLonguage(),
        "competences" => $organisateur->getSkills(),
        "date_embauche" => $organisateur->getDateEmbauche(),
        "image" => $organisateur->getImageOrg(),
    ], 200);
}





/********************* *************************
 * ***************Affichage offre cote Admin***
 * ********************************************
 **********************************************/

 #[Route('/offersback', name: 'app_consulterOffreCoteAdmin')]
 public function consulterOffreAdmi(EntityManagerInterface $entityManager): Response
 {
 


 $offreRepository = $entityManager->getRepository(Offre::class);
 
 return $this->render('offers/offersBack.html.twig', [
    'pending_offers' => $offreRepository->findBy(['statu' => 'pending']),
    'treated_offers' => $offreRepository->findBy(['statu' => 'treated']),
    'canceled_offers' => $offreRepository->findBy(['statu' => 'canceled']), // Add this line
   
]);
 
 /*return $this->render('offers/afficherOffreFront.html.twig', [
     'pending_offers' => $offreRepository->findBy([ 'statu' => 'pending','user' => $user, ]),
     'treated_offers' => $offreRepository->findBy([ 'statu' => 'treated','user' => $user,  ]),
 ]);*/
 }
 

/******************************
 * Delete offre cote admin*****
 ******************************/
 
 #[Route('/offre/delete/{id}', name: 'delete_offre', methods: ["POST"])]
 public function deleteoffreAdmin(int $id, EntityManagerInterface $entityManager): JsonResponse
 {
     $offre = $entityManager->getRepository(Offre::class)->find($id);
 
     if (!$offre) {
         return new JsonResponse(['success' => false, 'message' => 'Offer not found'], 404);
     }
 
     try {
         // Suppression définitive de l'offre
         $entityManager->remove($offre);
         $entityManager->flush();
         
         return new JsonResponse(['success' => true, 'message' => 'Offer deleted successfully']);
     } catch (\Exception $e) {
         return new JsonResponse(['success' => false, 'message' => 'Error deleting offer: ' . $e->getMessage()], 500);
     }
 }


 
/****************************************************
 *********** Afectation offre a un organisateur *****
 ******************************************************/


 #[Route(path: '/AfecterOffre', name: 'app_AfecterOffre')]
 public function timchiIlPageAfecter(Request $request, EntityManagerInterface $entityManager): Response
 {
 

    
// Récupérer l'ID depuis la requête POST
$offerId = $request->request->get('id');

if (!$offerId) {
    throw $this->createNotFoundException('ID de l\'offre non spécifié.');
}

// Récupérer l'offre par son ID
$offer = $entityManager->getRepository(Offre::class)->find($offerId);

if (!$offer) {
    throw $this->createNotFoundException('Offre non trouvée.');
}



$organisateurs = $entityManager->getRepository(Organisateur::class)->findAll();
dump($organisateurs); // Vérifier les données récupérées


 // Passer les données de l'offre et les spécialités à la vue Twig
 return $this->render('offers/afecterOffre.html.twig' ,[
    'offer' => $offer,
    'organizers' => $organisateurs,
]);
 
}
 

/// fonction afecter offre 
#[Route('/offre/affecter/{id}', name: 'app_offer_assign', methods: ["PUT"])]
public function assignOrganizer(int $id, Request $request, EntityManagerInterface $entityManager): JsonResponse
{
    // Récupérer les données envoyées par le client
    $data = json_decode($request->getContent(), true);

    // Vérifier le token CSRF
    if (!$this->isCsrfTokenValid('assign' . $id, $data['_token'])) {
        return new JsonResponse(["message" => "Token CSRF invalide."], 400);
    }

    // Rechercher l'offre par son ID
    $offre = $entityManager->getRepository(Offre::class)->find($id);
    if (!$offre) {
        return new JsonResponse(["message" => "Offre non trouvée."], 404);
    }

    // Rechercher l'organisateur par son ID
    $organisateur = $entityManager->getRepository(Organisateur::class)->find($data['organizerId']);
    if (!$organisateur) {
        return new JsonResponse(["message" => "Organisateur non trouvé."], 404);
    }

    try {
        // Mettre à jour l'offre
        $offre->setOrganisateur($organisateur); // Lier l'organisateur à l'offre
        $offre->setStatu("treated"); // Changer le statut de l'offre
        $offre->setDateDemande(new \DateTime()); // Ajouter la date de demande

        // Mettre à jour la disponibilité de l'organisateur
        $organisateur->setStatut("Not available");

        // Sauvegarder les modifications dans la base de données
        $entityManager->flush();

        return new JsonResponse(["message" => "Organisateur affecté avec succès."], 200);
    } catch (\Exception $e) {
        error_log($e->getMessage());
        return new JsonResponse(["message" => "Erreur lors de l'affectation de l'organisateur.", "error" => $e->getMessage()], 500);
    }
}



/*****************************************
 ********************** STATIStique ******
 *****************************************/#[Route('/statistique', name: 'app_statistique')]
public function statistique(EntityManagerInterface $entityManager): Response
{
    $offreRepository = $entityManager->getRepository(Offre::class);
    $organisateurRepository = $entityManager->getRepository(Organisateur::class);

    // Statistiques des offres
    $treatedOffers = $offreRepository->count(['statu' => 'treated']);
    $pendingOffers = $offreRepository->count(['statu' => 'pending']);
    $canceledOffers = $offreRepository->count(['statu' => 'canceled']);

    // Statistiques des organisateurs
    $availableOrganizers = $organisateurRepository->count(['statut' => 'Available']);
    $unavailableOrganizers = $organisateurRepository->count(['statut' => 'Not Available']);

    // Statistiques par type d'événement
    $query = $offreRepository->createQueryBuilder('o')
        ->select('o.type_evenement as type, COUNT(o.id_offre) as count')
        ->groupBy('o.type_evenement')
        ->getQuery();
    $eventTypes = $query->getResult();

    return $this->render('organizers/statistique.html.twig', [
        'treatedOffers' => $treatedOffers,
        'pendingOffers' => $pendingOffers,
        'canceledOffers' => $canceledOffers,
        'availableOrganizers' => $availableOrganizers,
        'unavailableOrganizers' => $unavailableOrganizers,
        'eventTypes' => $eventTypes,
    ]);
}




/****************************************
 * *************** Afecter ai ***********
 ****************************************/
 
 #[Route(path: '/AfecterAIOffre', name: 'app_AfecterAIOffre', methods: ['POST'])]
public function affecterOrganisateurParIA(Request $request, EntityManagerInterface $entityManager): Response
{
    $offerId = $request->request->get('id');
    if (!$offerId) {
        throw $this->createNotFoundException('ID de l\'offre non spécifié.');
    }

    $offer = $entityManager->getRepository(Offre::class)->find($offerId);
    if (!$offer) {
        throw $this->createNotFoundException('Offre non trouvée.');
    }

    $organisateurs = $entityManager->getRepository(Organisateur::class)->findAll();

    try {
        // Convert offer to array
        $offreData = [
            'id' => $offer->getId(),
            'objet' => $offer->getObjet(),
            'description' => $offer->getDescription(),
            'type_evenement' => $offer->getTypeEvenement(),
            'budget' => $offer->getBudget(),
            'nombreInvite' => $offer->getNombreInvite(),
            'dateDebutEvenement' => $offer->getDateDebutEvenement(),
            'dateFinEvenement' => $offer->getDateFinEvenement(),
            'lieuEvenement' => $offer->getLieuEvenement(),
        ];

        // Convert organizers to array
        $organisateursArray = [];
        foreach ($organisateurs as $org) {
            $organisateursArray[] = [
                'id' => $org->getId(),
                'nom' => $org->getNomOrg(),
                'prenom' => $org->getPrenomOrg(),
                'email' => $org->getEmailOrg(),
                'specialite' => $org->getSpecialite(),
                'skills' => $org->getSkills(),
                'langue' => $org->getLonguage(),
                'experience' => $org->getNbexp(),
                'salaire' => $org->getSalaire(),
                'statut' => $org->getStatut(),
            ];
        }

        // Build the prompt
        $prompt = "## Détails de l'offre ##\n";
        $prompt .= json_encode($offreData, JSON_PRETTY_PRINT) . "\n\n";
        $prompt .= "## Liste complète des organisateurs ##\n";
        $prompt .= json_encode($organisateursArray, JSON_PRETTY_PRINT) . "\n\n";
        $prompt .= <<<INSTRUCTIONS
## Instructions ##
You must select the best organizer for the given offer based on the following criteria:
1. The organizer's `specialite` must exactly match the offer's `type_evenement` (case-sensitive).
2. The organizer's `salaire` must be less than or equal to the offer's `budget`. If `salaire` exceeds `budget`, the organizer is ineligible.
3. The organizer must have `statut` set to "Available".
4. If multiple organizers meet all criteria, select the one with the lowest `salaire`.
5. If no organizer meets all criteria, return "not exist" as the last line.

Provide a clear explanation of your reasoning, structured as follows:
- Start with "Offer details:" followed by all offer fields, each on a new line, formatted clearly as:
  - id: [id]
  - objet: [objet]
  - description: [description]
  - type_evenement: [type_evenement]
  - budget: [budget]
  - nombreInvite: [nombreInvite]
  - dateDebutEvenement: [dateDebutEvenement]
  - dateFinEvenement: [dateFinEvenement]
  - lieuEvenement: [lieuEvenement]
- For each organizer, evaluate:
  - Whether their `specialite` matches `type_evenement`.
  - Whether their `salaire` is less than or equal to `budget`.
  - Whether their `statut` is "Available".
- Explain why the selected organizer was chosen (or why none was chosen).
- If multiple organizers qualify, justify choosing the one with the lowest `salaire`.

Output format:
- Explanation of the selection process (as described above).
- For the selected organizer: "Best organizer: [prenom] [nom], Email: [email]...".
- Last line: the organizer's `id` (integer) or "not exist" if no match is found.
INSTRUCTIONS;

        // Call Gemini API
        $response = $this->httpClient->request('POST',
            'https://generativelanguage.googleapis.com/v1beta/models/gemini-2.0-flash:generateContent?key=' . $this->geminiApiKey,
            [
                'json' => [
                    'contents' => [
                        [
                            'parts' => [
                                ['text' => $prompt]
                            ]
                        ]
                    ]
                ],
                'headers' => [
                    'Content-Type' => 'application/json',
                ],
            ]
        );

        $content = $response->toArray();
        $reponseIA = $content['candidates'][0]['content']['parts'][0]['text'] ?? 'Erreur: Aucune réponse de l\'IA';

        // Extract the last line to determine organizer ID or no match
        $lines = array_filter(array_map('trim', explode("\n", $reponseIA)));
        $lastLine = end($lines);
        $noMatch = ($lastLine === 'not exist');
        $organisateurId = $noMatch ? null : (is_numeric($lastLine) ? (int)$lastLine : null);

        // Fetch recommended organizer, if any
        $organisateurRecommande = $organisateurId ? $entityManager->getRepository(Organisateur::class)->find($organisateurId) : null;

        return $this->render('offers/afecterOffreAi.html.twig', [
            'offer' => $offer,
            'reponseIA' => $reponseIA,
            'organisateurRecommande' => $organisateurRecommande,
            'noMatch' => $noMatch,
        ]);
    } catch (\Exception $e) {
        $this->addFlash('error', 'Erreur lors de l\'analyse IA: ' . $e->getMessage());
        return $this->redirectToRoute('app_consulterOffreCoteAdmin');
    }
}








/************************ AI agent Controller********************
 * ************************************************************
 ********************************************************/
/*
    #[Route('/api/greet', name: 'api_greet', methods: ['POST'])]
    public function greet(): JsonResponse
    {
        $apiKey = $_ENV['DEEPINFRA_API_KEY'] ?? 'pHrya1ylqY0NYjgu3THedMEg6mvS5xrH';
        $client = HttpClient::create();
        $prompt = "You are Eventify a friendly AI assistant. Provide a short, welcoming greeting to start a conversation, like 'Hello! I'm here to help you with any questions!'";

        try {
            $response = $client->request('POST', 'https://api.deepinfra.com/v1/inference/meta-llama/Meta-Llama-3-8B-Instruct', [
                'headers' => [
                    'Authorization' => "Bearer $apiKey",
                    'Content-Type' => 'application/json',
                ],
                'json' => [
                    'input' => "<|begin_of_text|><|start_header_id|>user<|end_header_id>\n\n$prompt<|eot_id|><|start_header_id|>assistant<|end_header_id>\n\n",
                    'stop' => ['<|eot_id|>'],
                    'stream' => false,
                ],
            ]);

            $result = $response->toArray();
            $greeting = $result['results'][0]['generated_text'] ?? 'Hello! How can I assist you today?';

            return new JsonResponse(['greeting' => $greeting]);
        } catch (\Exception $e) {
            return new JsonResponse(['error' => 'API error: ' . $e->getMessage()], 500);
        }
    }

    #[Route('/api/ask', name: 'api_ask', methods: ['POST'])]
    public function ask(Request $request): JsonResponse
    {
        $data = json_decode($request->getContent(), true);
        $input = $data['question'] ?? '';

        if (empty($input)) {
            return new JsonResponse(['error' => 'Input is required'], 400);
        }

        $apiKey = $_ENV['DEEPINFRA_API_KEY'] ?? 'pHrya1ylqY0NYjgu3THedMEg6mvS5xrH';
        $client = HttpClient::create();

        $isQuestion = preg_match('/\?$|\b(what|where|when|why|how|who|is|are|can|does|do)\b/i', $input);
        $prompt = $isQuestion
            ? "You are a helpful AI assistant. Answer the following question concisely and naturally: $input"
            : "You are a conversational AI. The user said: '$input'. If it's not a question, acknowledge it briefly (e.g., 'That's interesting!' or 'Got it!') and ask if they have a question. If it seems like a question, answer it.";

        try {
            $response = $client->request('POST', 'https://api.deepinfra.com/v1/inference/meta-llama/Meta-Llama-3-8B-Instruct', [
                'headers' => [
                    'Authorization' => "Bearer $apiKey",
                    'Content-Type' => 'application/json',
                ],
                'json' => [
                    'input' => "<|begin_of_text|><|start_header_id|>user<|end_header_id>\n\n$prompt<|eot_id|><|start_header_id|>assistant<|end_header_id>\n\n",
                    'stop' => ['<|eot_id|>'],
                    'stream' => false,
                ],
            ]);

            $result = $response->toArray();
            $answer = $result['results'][0]['generated_text'] ?? 'Sorry, I couldn’t understand that.';

            return new JsonResponse(['answer' => $answer]);
        } catch (\Exception $e) {
            return new JsonResponse(['error' => 'API error: ' . $e->getMessage()], 500);
        }
    }
*/



#[Route('/api/greet', name: 'api_greet', methods: ['POST'])]
public function greet( EntityManagerInterface $entityManager): JsonResponse
{
    $apiKey = $_ENV['DEEPINFRA_API_KEY'] ?? 'pHrya1ylqY0NYjgu3THedMEg6mvS5xrH';
    $client = HttpClient::create();

    // Fetch all organizers and manually format details
    $organisateurs = $entityManager->getRepository(Organisateur::class)->findAll();
    $organisateurDetails = "Here are the available organizers in our company with their full details:\n";
    foreach ($organisateurs as $organisateur) {
        $organisateurDetails .= "Organizer:\n";
        $organisateurDetails .= "- Given Name: {$organisateur->getNomOrg()}\n";
        $organisateurDetails .= "- Family Name: {$organisateur->getPrenomOrg()}\n";
        $organisateurDetails .= "- Email: {$organisateur->getEmailOrg()}\n";
        $organisateurDetails .= "- Phone Number: {$organisateur->getNumTel()}\n";
        $organisateurDetails .= "- Speciality: {$organisateur->getSpecialite()}\n";
        $organisateurDetails .= "- Years Of Experience: {$organisateur->getNbexp()}\n";
        $organisateurDetails .= "- City: " . ($organisateur->getCity() ?? 'N/A') . "\n";
        $organisateurDetails .= "- Employment: " . ($organisateur->getEmployment() ?? 'N/A') . "\n";
        $organisateurDetails .= "- Skills: " . ($organisateur->getSkills() ?? 'N/A') . "\n";
        $organisateurDetails .= "- Langues: " . ($organisateur->getLonguage() ?? 'N/A') . "\n";
        $organisateurDetails .= "- Salary: {$organisateur->getSalaire()}\n";
        $organisateurDetails .= "- State: " . ($organisateur->getStatut() === 'Available' ? 'Yes' : 'No') . "\n";
    }

    $prompt = "You are Eventify, a friendly AI assistant for event planning. You have access to a list of organizers from our company with their complete details to assist with event-related queries. $organisateurDetails Provide a short, welcoming greeting to start a conversation, like 'Hello! I'm Eventify, here to help you plan events with our talented organizers!'";

    try {
        $response = $client->request('POST', 'https://api.deepinfra.com/v1/inference/meta-llama/Meta-Llama-3-8B-Instruct', [
            'headers' => [
                'Authorization' => "Bearer $apiKey",
                'Content-Type' => 'application/json',
            ],
            'json' => [
                'input' => "<|begin_of_text|><|start_header_id|>user<|end_header_id>\n\n$prompt<|eot_id|><|start_header_id|>assistant<|end_header_id>\n\n",
                'stop' => ['<|eot_id|>'],
                'stream' => false,
            ],
        ]);

        $result = $response->toArray();
        $greeting = $result['results'][0]['generated_text'] ?? 'Hello! I’m Eventify, here to help you plan events with our talented organizers!';

        return new JsonResponse(['greeting' => $greeting]);
    } catch (\Exception $e) {
        return new JsonResponse(['error' => 'API error: ' . $e->getMessage()], 500);
    }
}

#[Route('/api/ask', name: 'api_ask', methods: ['POST'])]
public function ask(Request $request , EntityManagerInterface $entityManager): JsonResponse
{
    $data = json_decode($request->getContent(), true);
    $input = $data['question'] ?? '';

    if (empty($input)) {
        return new JsonResponse(['error' => 'Input is required'], 400);
    }

    $apiKey = $_ENV['DEEPINFRA_API_KEY'] ?? 'pHrya1ylqY0NYjgu3THedMEg6mvS5xrH';
    $client = HttpClient::create();

    // Fetch all organizers and manually format details
    $organisateurs = $entityManager->getRepository(Organisateur::class)->findAll();
    $organisateurDetails = "You have access to the following organizers in our company with their complete details:\n";
    foreach ($organisateurs as $organisateur) {
        $organisateurDetails .= "Organizer:\n";
        $organisateurDetails .= "- Given Name: {$organisateur->getNomOrg()}\n";
        $organisateurDetails .= "- Family Name: {$organisateur->getPrenomOrg()}\n";
        $organisateurDetails .= "- Email: {$organisateur->getEmailOrg()}\n";
        $organisateurDetails .= "- Phone Number: {$organisateur->getNumTel()}\n";
        $organisateurDetails .= "- Speciality: {$organisateur->getSpecialite()}\n";
        $organisateurDetails .= "- Years Of Experience: {$organisateur->getNbexp()}\n";
        $organisateurDetails .= "- City: " . ($organisateur->getCity() ?? 'N/A') . "\n";
        $organisateurDetails .= "- Employment: " . ($organisateur->getEmployment() ?? 'N/A') . "\n";
        $organisateurDetails .= "- Skills: " . ($organisateur->getSkills() ?? 'N/A') . "\n";
        $organisateurDetails .= "- Langues: " . ($organisateur->getLonguage() ?? 'N/A') . "\n";
        $organisateurDetails .= "- Salary: {$organisateur->getSalaire()}\n";
        $organisateurDetails .= "- State: " . ($organisateur->getStatut() === 'Available' ? 'Yes' : 'No') . "\n";
    }

    $isQuestion = preg_match('/\?$|\b(what|where|when|why|how|who|is|are|can|does|do)\b/i', $input);
    $prompt = $isQuestion
        ? "You are Eventify, a helpful AI assistant for event planning. $organisateurDetails Answer the following question concisely and naturally, using the organizer information if relevant: $input"
        : "You are Eventify, a conversational AI for event planning. $organisateurDetails The user said: '$input'. If it's not a question, acknowledge it briefly (e.g., 'That's interesting!' or 'Got it!') and ask if they have a question. If it seems like a question or is related to organizers or events, answer it using the organizer information if relevant.";

    try {
        $response = $client->request('POST', 'https://api.deepinfra.com/v1/inference/meta-llama/Meta-Llama-3-8B-Instruct', [
            'headers' => [
                'Authorization' => "Bearer $apiKey",
                'Content-Type' => 'application/json',
            ],
            'json' => [
                'input' => "<|begin_of_text|><|start_header_id|>user<|end_header_id>\n\n$prompt<|eot_id|><|start_header_id|>assistant<|end_header_id>\n\n",
                'stop' => ['<|eot_id|>'],
                'stream' => false,
            ],
        ]);

        $result = $response->toArray();
        $answer = $result['results'][0]['generated_text'] ?? 'Sorry, I couldn’t understand that.';

        return new JsonResponse(['answer' => $answer]);
    } catch (\Exception $e) {
        return new JsonResponse(['error' => 'API error: ' . $e->getMessage()], 500);
    }
}





}


