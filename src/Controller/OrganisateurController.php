<?php

namespace App\Controller;

use App\Entity\User;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

use Symfony\Component\HttpFoundation\Request;



/// taba3 il ajout fil base
use App\Entity\Organisateur;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\JsonResponse;


final class OrganisateurController extends AbstractController{
   /* #[Route('/organizersBack', name: 'app_organisateur')]
    public function index(): Response
    {
        return $this->render('organizers/organizersBack.html.twig', [
            'controller_name' => 'OrganisateurController',
        ]);
    }*/

// bich ihizni lil ajouter formulaire
    #[Route(path: '/AjouterOrganisateurBack', name: 'app_AjouterOrganisateurBack')]
    public function staff(): Response
    {
        // Lire les spécialités depuis le fichier
        $specialites = file($this->filePath, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);

        return $this->render('organizers/ajouterOrganisateurBack.html.twig', [
        'specialites' => $specialites,
        ]);

    }
/************** taba3 il fichier specialite ******************************
*************************************************************************
************************************************************************/
    
private $filePath;

public function __construct()
{
    //// Initialiser le chemin du fichier
    $this->filePath = __DIR__ . '/../../public/filesOrganisateur/specialities.txt';

    //// Créer le fichier s'il n'existe pas
    if (!file_exists($this->filePath)) {
        file_put_contents($this->filePath, '');
    }
}

#[Route('/specialites', name: 'specialites_list')]
public function listSpecialites(): Response
{
   //// Lire les spécialités depuis le fichier
   $specialites = file($this->filePath, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);

   return $this->render('organizers/ajouterOrganisateurBack.html.twig', [
       'specialites' => $specialites,
   ]);
}

#[Route('/specialite/add', name: 'specialite_add', methods: ["POST"])]
public function addSpecialite(Request $request): Response
{
    //// Récupérer la spécialité depuis la requête POST
    $specialite = trim($request->request->get('specialite'));

    ////Vérifier si la spécialité est vide
    if (!$specialite) {
        $this->addFlash('error', 'Veuillez entrer une spécialité valide.');
        return $this->redirectToRoute('specialites_list');
    }

    try {
        //// Lire les spécialités existantes depuis le fichier
        $specialites = file($this->filePath, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);

        //// Vérifier si la spécialité existe déjà
        if (in_array($specialite, $specialites)) {
            $this->addFlash('warning', 'Cette spécialité existe déjà.');
            return $this->redirectToRoute('specialites_list');
        }

        //// Ajouter la nouvelle spécialité au fichier
        file_put_contents($this->filePath, $specialite . PHP_EOL, FILE_APPEND);
        $this->addFlash('success', 'Spécialité ajoutée avec succès.');

    } catch (\Exception $e) {
        //// Gérer les erreurs potentielles (par exemple, problème d'accès au fichier)
        $this->addFlash('danger', 'Une erreur est survenue lors de l\'ajout de la spécialité.');
        return $this->redirectToRoute('specialites_list');
    }

    //// Rediriger vers la liste des spécialités
    return $this->redirectToRoute('specialites_list');
}


#[Route('/specialite/delete', name: 'specialite_delete', methods: ["POST"])]
public function deleteSpecialite(Request $request): Response
{
    //// Récupérer la spécialité à supprimer depuis la requête POST
    $specialite = trim($request->request->get('specialite'));

    //// Vérifier si la spécialité est valide
    if (!$specialite) {
        $this->addFlash('error', 'Veuillez sélectionner une spécialité à supprimer.');
        return $this->redirectToRoute('specialites_list');
    }

    try {
        //// Lire les spécialités actuelles depuis le fichier
        $specialites = file($this->filePath, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);

        //// Vérifier si la spécialité existe dans le fichier
        if (!in_array($specialite, $specialites)) {
            $this->addFlash('warning', 'La spécialité sélectionnée n\'existe pas.');
            return $this->redirectToRoute('specialites_list');
        }

        //// Filtrer la spécialité à supprimer
        $specialites = array_filter($specialites, fn($s) => trim($s) !== $specialite);

        //// Réécrire le fichier avec les spécialités restantes
        file_put_contents($this->filePath, implode(PHP_EOL, $specialites) . PHP_EOL);

        //// Ajouter un message de succès
        $this->addFlash('success', 'Spécialité supprimée avec succès.');
    } catch (\Exception $e) {
        //// Gérer les erreurs potentielles (par exemple, problèmes d'accès au fichier)
        $this->addFlash('danger', 'Une erreur est survenue lors de la suppression de la spécialité.');
        return $this->redirectToRoute('specialites_list');
    }

    //// Rediriger vers la liste des spécialités
    return $this->redirectToRoute('specialites_list');
}


/**************        CRUD Ajout       ***************************************
*************************************************************************
************************************************************************/

// Fonction  Ajouter  
private function rechercheUser(int $id, EntityManagerInterface $entityManager): ?User   /**fonciton itlawej il user par id**/ 
{
    return $entityManager->getRepository(User::class)->find($id);
}

// fonction il ajout li base de donnees 
#[Route('/organisateur/add', name: 'add_organisateur', methods: ["POST"])]
public function addOrganisateur(Request $request, EntityManagerInterface $entityManager): JsonResponse
{
    $data = json_decode($request->getContent(), true);

    // Récupérer l'image en base64
    $imageBase64 = $data['imageOrg'];
    $imagePath = null;

    if ($imageBase64) {
        $imageData = base64_decode($imageBase64); // Décoder l'image
        $imageName = uniqid() . '.jpg'; // Nom unique pour l'image
        $imageDirectory = $this->getParameter('image_directoryOrg'); // Chemin du dossier
        file_put_contents($imageDirectory . '/' . $imageName, $imageData); // Sauvegarder l'image
        $imagePath = 'filesOrganisateur/imageOrganisateurAMS/' . $imageName; // Chemin relatif




        /// sauvgarder l image dans pidev 
        $imageDirectory = $this->getParameter('image_directoryOrgPidev'); // Chemin du dossier
        file_put_contents($imageDirectory . '/' . $imageName, $imageData); // Sauvegarder l'image


    }

    $organisateur = new Organisateur();
    $user = $this->rechercheUser(8, $entityManager);
    if (!$user) {
        return new JsonResponse(["message" => "Utilisateur non trouvé."], 404);
    }

    $organisateur->setUser($user);
    $organisateur->setImageOrg($imagePath); // Enregistrer le chemin de l'image
    $organisateur->setNomOrg($data['nom_org']);
    $organisateur->setPrenomOrg($data['prenom_org']);
    $organisateur->setEmailOrg($data['email_org']);
    $organisateur->setNumTel($data['num_tel']);
    $organisateur->setCity($data['city']);
    $organisateur->setDateNaissance($data['date_naissance']);
    $organisateur->setSpecialite($data['specialite']);
    $organisateur->setDateEmbauche($data['date_embauche']);
    $organisateur->setNbexp((int)$data['nbexp']);
    $organisateur->setSalaire((float)$data['salaire']);
    $organisateur->setEmployment($data['employment']);
    $organisateur->setSkills($data['skills']);
    $organisateur->setLonguage($data['longuage']);

    try {
        $entityManager->persist($organisateur);
        $entityManager->flush();
        return new JsonResponse(["message" => "Organisateur ajouté avec succès."], 200);
    } catch (\Exception $e) {
        return new JsonResponse(["message" => "Erreur lors de l'ajout de l'organisateur."], 500);
    }
}




/**************        CRUD  Affichage       ***************************************
*************************************************************************
************************************************************************/
#[Route('/organizersback', name: 'app_organizersBack')]
public function afficherOrg(EntityManagerInterface $entityManager): Response
{
    $organisateurs = $entityManager->getRepository(Organisateur::class)->findAll();
    dump($organisateurs); // Vérifier les données récupérées
    return $this->render('organizers/organizersBack.html.twig', [
        'organizers' => $organisateurs,
    ]);
}






/**************        CRUD  Delete       ***************************************
*************************************************************************
************************************************************************/

 #[Route('/organisateur/delete/{id}', name: 'delete_organisateur' ,methods: ["DELETE"])]
public function deleteOrganisateur(int $id, EntityManagerInterface $entityManager): Response
{
    // Récupérer l'organisateur par son ID
    $organisateur = $entityManager->getRepository(Organisateur::class)->find($id);

    if (!$organisateur) {
        return new JsonResponse(["message" => "Organisateur non trouvé."], 404);
    }

    try {
        // Supprimer l'organisateur de la base de données
        $entityManager->remove($organisateur);
        $entityManager->flush();

        return new JsonResponse(["message" => "Organisateur supprimé avec succès."], 200);
    } catch (\Exception $e) {
        return new JsonResponse(["message" => "Erreur lors de la suppression de l'organisateur."], 500);
    }
}

/**************        CRUD  affichage detail d un organisateur       ***************************************
*************************************************************************
************************************************************************/#[Route('/organisateur/{id}', name: 'app_organisateur_details', methods: ["GET"])]
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








/**************        CRUD  Modifier organisateur      ***
*************************************************************************
************************************************************************/

/// na5ou il id il organisateur ki tinzil 3ala botuon modifier min page affichage imta3 les organisateurs
#[Route('/modifierOrganisateur', name: 'app_modifierOrganisateur', methods: ['POST'])]
public function modifierOrgPage(Request $request, EntityManagerInterface $entityManager): Response
{

    $specialites = file($this->filePath, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);

    // Récupérer l'ID depuis la requête POST
    $organizerId = $request->request->get('id');

    if (!$organizerId) {
        throw $this->createNotFoundException('ID de l\'organisateur non spécifié.');
    }

    // Récupérer l'organisateur par son ID
    $organisateur = $entityManager->getRepository(Organisateur::class)->find($organizerId);

    if (!$organisateur) {
        throw $this->createNotFoundException('Organisateur non trouvé.');
    }

    // Passer les données de l'organisateur à la vue Twig
    return $this->render('organizers/modifierOrganisateurBack.html.twig', [
        'organisateur' => $organisateur,
        'specialites' => $specialites,
    ]);
}

/// fonction ili itmodifilik fil base de donneees 
#[Route('/organisateur/edit/{id}', name: 'edit_organisateur', methods: ["PUT"])]
public function editOrganisateur(int $id, Request $request, EntityManagerInterface $entityManager): JsonResponse
{
    // Récupérer les données envoyées par le client
    $data = json_decode($request->getContent(), true);

    // Rechercher l'organisateur par son ID
    $organisateur = $entityManager->getRepository(Organisateur::class)->find($id);

    if (!$organisateur) {
        return new JsonResponse(["message" => "Organisateur non trouvé."], 404);
    }

    // Récupérer l'utilisateur lié à l'organisateur
    $user = $this->rechercheUser(8, $entityManager);
    if (!$user) {
        return new JsonResponse(["message" => "Utilisateur non trouvé."], 404);
    }

    // Gestion de l'image
    $imagePath = $organisateur->getImageOrg(); // Conserver l'image existante par défaut
    if (!empty($data['imageOrg'])) {
        $imageBase64 = $data['imageOrg'];
        $imageData = base64_decode($imageBase64); // Décoder l'image
        $imageName = uniqid() . '.jpg'; // Nom unique pour l'image
        $imageDirectory = $this->getParameter('image_directoryOrg'); // Chemin du dossier
        file_put_contents($imageDirectory . '/' . $imageName, $imageData); // Sauvegarder l'image
        $imagePath = 'filesOrganisateur/imageOrganisateurAMS/' . $imageName; // Chemin relatif

        // Sauvegarder l'image dans pidev
        $imageDirectoryPidev = $this->getParameter('image_directoryOrgPidev'); // Chemin du dossier
        file_put_contents($imageDirectoryPidev . '/' . $imageName, $imageData); // Sauvegarder l'image
    }

    // Mettre à jour les propriétés de l'organisateur
    $organisateur->setUser($user);
    $organisateur->setImageOrg($imagePath);
    $organisateur->setNomOrg($data['nom_org']);
    $organisateur->setPrenomOrg($data['prenom_org']);
    $organisateur->setEmailOrg($data['email_org']);
    $organisateur->setNumTel($data['num_tel']);
    $organisateur->setCity($data['city']);
    $organisateur->setDateNaissance($data['date_naissance']);
    $organisateur->setSpecialite($data['specialite']);
    $organisateur->setDateEmbauche($data['date_embauche']);
    $organisateur->setNbexp((int)$data['nbexp']);
    $organisateur->setSalaire((float)$data['salaire']);
    $organisateur->setEmployment($data['employment']);
    $organisateur->setSkills($data['skills']);
    $organisateur->setLonguage($data['longuage']);

    try {
        $entityManager->flush();
        return new JsonResponse(["message" => "Organisateur modifié avec succès."], 200);
    } catch (\Exception $e) {
        error_log($e->getMessage());
        return new JsonResponse(["message" => "Erreur lors de la modification de l'organisateur.", "error" => $e->getMessage()], 500);
    }
}


}