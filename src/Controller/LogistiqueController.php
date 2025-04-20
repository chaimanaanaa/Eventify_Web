<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\Persistence\ManagerRegistry;
use App\Entity\Logistique;
use App\Entity\Panier;
use App\Entity\User;
use App\Repository\PanierRepository;
use Symfony\Component\Security\Core\Security;
use App\Entity\Category;
use App\Form\CategoryType;


use App\Form\LogistiqueFormType;

use Symfony\Component\HttpFoundation\Session\SessionInterface;


final class LogistiqueController extends AbstractController
{





  /*  #[Route('/logisticsAll', name: 'logistique_list')]
public function logisticsAll(ManagerRegistry $mr, Security $security): Response
{
    $em = $mr->getManager();
    $user = $em->getRepository(User::class)->find(6); // Pour test uniquement
    // $user = $security->getUser(); // Méthode correcte en production

    if (!$user) {
        throw $this->createAccessDeniedException('You must be logged in to view logistics.');
    }

    $repository = $mr->getRepository(Logistique::class);
    $logistic = $repository->findBy(['user' => $user]);

    return $this->render('logistics/logistics.html.twig', [
        'logistic' => $logistic,
    ]);
}
*/
#[Route('/logistics', name: 'app_logistics')]
public function logistics(Request $req, ManagerRegistry $mr, Security $security, SessionInterface $session): Response
{
    $em = $mr->getManager();
    $logistic = new Logistique();
    $form = $this->createForm(LogistiqueFormType::class, $logistic);
    $form->handleRequest($req);

    if ($form->isSubmitted() && $form->isValid()) {

        
        
        // Récupérer l'ID de l'utilisateur connecté depuis la session
        $userId = $session->get('user_id');
        if (!$userId) {
            throw $this->createAccessDeniedException('You must be logged in to create logistics.');
        }
        $user = $em->getRepository(User::class)->find(  $userId ); // Pour test uniquement
            
        //$user = $security->getUser(); // Méthode correcte en production

        if (!$user) {
            throw $this->createAccessDeniedException('You must be logged in to create logistics.');
        }

        $logistic->setUser($user);

        $imageFile = $form->get('imageFile')->getData();

        if ($imageFile) {
            $destination = $this->getParameter('kernel.project_dir') . '/public/logistique_uploads';
            $newFilename = uniqid() . '.' . $imageFile->guessExtension();
            $imageFile->move($destination, $newFilename);
            $logistic->setImage('/logistique_uploads/' . $newFilename);
        }

        $em->persist($logistic);
        $em->flush();

        return $this->redirectToRoute('app_shop');
    }

    return $this->render('logistics/logisticForm.html.twig', [
        'form' => $form->createView(),
        'image' => $logistic->getImage(),
    ]);
}

#[Route('/logisticsUpdate', name: 'app_logistic_update', methods: ['GET', 'POST'])]
public function updateLogistic(Request $request, EntityManagerInterface $em, ManagerRegistry $mr, Security $security , SessionInterface $session): Response
{
    $id = $request->isMethod('POST') ? $request->request->get('id') : $request->query->get('id');

    if (!$id) {
        throw $this->createNotFoundException('No logistics ID provided');
    }

    $logistic = $mr->getRepository(Logistique::class)->find($id);

    if (!$logistic) {
        throw $this->createNotFoundException('Logistic item not found');
    }


    ///

     // Récupérer l'ID de l'utilisateur connecté depuis la session
     $userId = $session->get('user_id');
     if (!$userId) {
        throw $this->createAccessDeniedException('You must be logged in to create logistics.');
     }


    //

    $user = $em->getRepository(User::class)->find($userId ); // Pour test uniquement
     //$user = $security->getUser(); // Méthode correcte en production

    if ($logistic->getUser() !== $user) {
        throw $this->createAccessDeniedException('You do not have permission to edit this logistic.');
    }

    $oldImage = $logistic->getImage();
    $uploadDir = $this->getParameter('kernel.project_dir') . '/public/logistique_uploads';

    $form = $this->createForm(LogistiqueFormType::class, $logistic);
    $form->handleRequest($request);

    if ($form->isSubmitted() && $form->isValid()) {
        $imageFile = $form->get('imageFile')->getData();

        if ($imageFile) {
            $newFilename = uniqid() . '.' . $imageFile->guessExtension();

            try {
                $imageFile->move($uploadDir, $newFilename);

                if ($oldImage) {
                    $filesystem = new \Symfony\Component\Filesystem\Filesystem();
                    $oldImagePath = $uploadDir . '/' . basename($oldImage);
                    if ($filesystem->exists($oldImagePath)) {
                        $filesystem->remove($oldImagePath);
                    }
                }

                $logistic->setImage('/logistique_uploads/' . $newFilename);
            } catch (\Exception $e) {
                $this->addFlash('error', 'Image upload failed.');
            }
        }

        $em->flush();
        return $this->redirectToRoute('app_shop');
    }

    return $this->render('logistics/logisticForm.html.twig', [
        'form' => $form->createView(),
        'logistic' => $logistic,
    ]);
}

#[Route('/logisticsDelete/{id}', name: 'app_logistic_delete')]
public function deleteLogistic(ManagerRegistry $mr, $id, Security $security, SessionInterface $session): Response
{
    $em = $mr->getManager();
    $repository = $mr->getRepository(Logistique::class);
    $logistic = $repository->find($id);

    if (!$logistic) {
        throw $this->createNotFoundException('Logistic item not found.');
    }


     // Récupérer l'ID de l'utilisateur connecté depuis la session
     $userId = $session->get('user_id');
     if (!$userId) {
            throw $this->createAccessDeniedException('You must be logged in to create logistics.');
     }

    $user = $em->getRepository(User::class)->find($userId ); // Pour test uniquement
     //$user = $security->getUser(); // Méthode correcte en production

    if ($logistic->getUser() !== $user) {
        throw $this->createAccessDeniedException('You do not have permission to delete this logistic.');
    }

    $em->remove($logistic);
    $em->flush();

    return $this->redirectToRoute('app_shop');
}


    


/////////////////////////////back/////////////////////////////////////

#[Route('/logisticsback', name: 'app_logisticsBack')]
public function logisticsBack(ManagerRegistry $mr): Response
{
    $repository = $mr->getRepository(Logistique::class);
    $logistic = $repository->findAll(); // Changed variable name to 'logistic'

    return $this->render('logistics/logisticsBack.html.twig', [
        'logistic' => $logistic, // Passing 'logistic' to the template
    ]);
}


#[Route('/logisticsDeleteBack/{id}', name: 'app_logistic_delete_back')]
    public function deleteLogisticBack(ManagerRegistry $mr, $id): Response
    {
        $repository = $mr->getRepository(Logistique::class);
        $logistic = $repository->find($id);
    
        if (!$logistic) {
            throw $this->createNotFoundException('Logistic item not found.');
        }
    
        $entityManager = $mr->getManager();
        $entityManager->remove($logistic);
        $entityManager->flush();
    
        return $this->redirectToRoute('app_logisticsBack');
    }


   






/////////////////////////marketplace/////////////////////////////////////





/////////////////////////////////////////////////
#[Route('/shop', name: 'app_shop', requirements: ['categoryId' => '\d+'], defaults: ['categoryId' => null])]
public function Show(Request $request, ManagerRegistry $mr , SessionInterface $session): Response
{
    $categoryId = $request->query->get('categoryId'); // Get categoryId from query parameters

    $repository = $mr->getRepository(Logistique::class);

    if ($categoryId) {
        // Fetch logistics by category
        $logistic = $repository->findBy(['category' => $categoryId]);
    } else {
        // Fetch all logistics if no category is selected
        $logistic = $repository->findAll();
    }


        // Récupérer l'ID de l'utilisateur connecté depuis la session
        $currentUserId = $session->get('user_id');
        if (!$currentUserId) {
    throw $this->createAccessDeniedException('You must be logged in to create logistics.');
        }


    //$currentUserId = 35; // Example: manually set or fetch from session, etc.

    // Fetch all categories to display in the dropdown or filter
    $categoryRepository = $mr->getRepository(Category::class);
    $categories = $categoryRepository->findAll();

    return $this->render('marketplace/test.html.twig', [
        'logistic' => $logistic, // Passing logistics to the template
        'categories' => $categories, // Passing categories for the dropdown
        'selectedCategory' => $categoryId, // To highlight the selected category
        'currentUserId' => $currentUserId,

    ]);
}

//////////////cart/////////////////////////////////////


#[Route('/cartadd/{id}', name: 'cart_add')]
public function addToCart(
    Logistique $logistique,
    PanierRepository $panierRepo,
    security $security,
    EntityManagerInterface $em
    , SessionInterface $session
): Response {
    // Get the currently authenticated user dynamically
   
   // $user = $security->getUser(); // Fetch the logged-in user
    // Fetch the user by ID (keep the hardcoded ID for now)

        // Récupérer l'ID de l'utilisateur connecté depuis la session
        $userId = $session->get('user_id');
        if (!$userId) {
    throw $this->createAccessDeniedException('You must be logged in to create logistics.');
        }


    $user = $em->getRepository(User::class)->find( $userId); // Change 1 to the correct user ID if needed
    if (!$user) {
        throw $this->createNotFoundException('User not found.');
    }

    // Check if the item already exists in the user's cart
    $existingCartItem = $panierRepo->findOneBy([
        'user' => $user,
        'logistique' => $logistique
    ]);

    if ($existingCartItem) {
        // If the product already exists in the cart, show a warning message
        $this->addFlash('warning', 'This product is already in your cart!');
    } else {
        // Create a new cart item and associate it with the user and the logistic item
        $cart = new Panier();
        $cart->setUser($user);
        $cart->setLogistique($logistique);
        $cart->setPrix($logistique->getPrix());  // Set the price here
        $cart->setName($logistique->getNom());

        // Check if the image is null and set a default image if it is
        $img = $logistique->getImage() ?? 'default_image.jpg'; // Provide a default image if null
        $cart->setImg($img);

        $em->persist($cart);
        $em->flush();

        $this->addFlash('success', 'Product added to your cart successfully!');
    }

    return $this->redirectToRoute('cart_view'); // Redirect to the cart view
}



    
   
    #[Route('/cart', name: 'cart_view')]
    public function viewCart(PanierRepository $panierRepo, security $security,
    EntityManagerInterface $em, SessionInterface $session): Response
    {
        // Get the currently authenticated user dynamically
        // Fetch the user by ID (replace 1 with the ID of the user you created)

            // Récupérer l'ID de l'utilisateur connecté depuis la session
            $userId = $session->get('user_id');
            if (!$userId) {
        throw $this->createAccessDeniedException('You must be logged in to create logistics.');
            }


        $user = $em->getRepository(User::class)->find($userId); // Change the ID as needed
        
        //$user = $security->getUser();

        if (!$user) {
            throw $this->createNotFoundException('User not found.');
        }
    
        // Fetch the cart items for the user
        $cartItems = $panierRepo->findBy(['user' => $user]);

        return $this->render('marketplace/panier.html.twig', [
            'cartItems' => $cartItems,
            'totalSum' => $panierRepo->getTotalSumByUser($user->getId()),]);
    }


    #[Route('/cartRemove/{id}', name: 'cart_remove')]
    public function removeFromCart(
        Panier $cartItem, 
        PanierRepository $panierRepo,
        EntityManagerInterface $em
    ): Response {
        // Check if the cart item exists
        if (!$cartItem) {
            $this->addFlash('error', 'This item does not exist in your cart.');
            return $this->redirectToRoute('cart_view');
        }
    
        // Remove the item from the cart
        $panierRepo->removeFromCart($cartItem);
    
        // Get the updated total sum and item count for the user
        $totalSum = $panierRepo->getTotalSumByUser($cartItem->getUser()->getId());
        $itemCount = $panierRepo->countItemsInCart($cartItem->getUser()->getId());
    
        // Add a flash message to indicate the item was removed
        $this->addFlash('success', 'Item removed from your cart.');
    
        // Redirect back to the cart view with updated totals
        return $this->redirectToRoute('cart_view', [
            'totalSum' => $totalSum,
            'itemCount' => $itemCount
        ]);
    }
    


//////////////////////////////////////////category////////////////////////////////////////////////////////





#[Route('/categories', name: 'category_list')]
public function categoriesAll(ManagerRegistry $mr): Response
{
    $em = $mr->getManager();
    $repository = $mr->getRepository(Category::class);
    $categories = $repository->findAll();

    return $this->render('logistics/categoryList.html.twig', [
        'categories' => $categories,
    ]);
}

#[Route('/categorynew', name: 'category_create')]
public function createCategory(Request $req, ManagerRegistry $mr): Response
{
    $em = $mr->getManager();
    $category = new Category();
    $form = $this->createForm(CategoryType::class, $category);
    $form->handleRequest($req);

    if ($form->isSubmitted() && $form->isValid()) {
        $imageFile = $form->get('image')->getData();

        if ($imageFile) {
            $destination = $this->getParameter('kernel.project_dir') . '/public/uploads/category_images';
            $newFilename = uniqid() . '.' . $imageFile->guessExtension();
            $imageFile->move($destination, $newFilename);
            $category->setImage('/uploads/category_images/' . $newFilename);
        }

        $em->persist($category);
        $em->flush();

        return $this->redirectToRoute('category_list');
    }

    return $this->render('logistics/FormCategory.html.twig', [
        'form' => $form->createView(),
        'category' => $category,
    ]);
}

#[Route('/categoryedit', name: 'category_edit', methods: ['GET', 'POST'])]
public function updateCategory(Request $request, ManagerRegistry $mr): Response
{
    $id = $request->get('id'); // Handles both GET and POST

    if (!$id) {
        $this->addFlash('error', 'No category ID provided.');
        return $this->redirectToRoute('category_list');
    }

    $em = $mr->getManager();
    $category = $mr->getRepository(Category::class)->find($id);

    if (!$category) {
        $this->addFlash('error', 'Category not found.');
        return $this->redirectToRoute('category_list');
    }

    $oldImage = $category->getImage();
    $uploadDir = $this->getParameter('kernel.project_dir') . '/public/uploads/category_images';

    $form = $this->createForm(CategoryType::class, $category);
    $form->handleRequest($request);

    if ($form->isSubmitted() && $form->isValid()) {
        $imageFile = $form->get('image')->getData();

        if ($imageFile) {
            $newFilename = uniqid() . '.' . $imageFile->guessExtension();

            try {
                $imageFile->move($uploadDir, $newFilename);

                if ($oldImage) {
                    $filesystem = new \Symfony\Component\Filesystem\Filesystem();
                    $oldImagePath = $uploadDir . '/' . basename($oldImage);
                    if ($filesystem->exists($oldImagePath)) {
                        $filesystem->remove($oldImagePath);
                    }
                }

                $category->setImage('/uploads/category_images/' . $newFilename);
            } catch (\Exception $e) {
                $this->addFlash('error', 'Image upload failed.');
            }
        }

        $em->flush();
        $this->addFlash('success', 'Category updated successfully!');
        return $this->redirectToRoute('category_list');
    }

    return $this->render('logistics/FormCategory.html.twig', [
        'form' => $form->createView(),
        'category' => $category,
    ]);
}


#[Route('/categorydelete', name: 'category_delete', methods: ['POST'])]
public function deleteCategory(Request $request, ManagerRegistry $mr): Response
{
    $id = $request->request->get('id'); // Get the category ID from the POST request

    if (!$id) {
        $this->addFlash('error', 'No category ID provided.');
        return $this->redirectToRoute('category_list');
    }

    $em = $mr->getManager();
    $category = $mr->getRepository(Category::class)->find($id);

    if (!$category) {
        $this->addFlash('error', 'Category not found.');
        return $this->redirectToRoute('category_list');
    }

    if ($this->isCsrfTokenValid('delete' . $category->getId(), $request->request->get('_token'))) {
        $em->remove($category);
        $em->flush();
        $this->addFlash('success', 'Category deleted successfully!');
    } else {
        $this->addFlash('error', 'Invalid CSRF token.');
    }

    return $this->redirectToRoute('category_list');
}










}