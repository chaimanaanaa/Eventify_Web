<?php

namespace App\Controller;

use Doctrine\ORM\EntityManagerInterface;

use App\Entity\Forum;
use Doctrine\Persistence\ManagerRegistry;
use Dompdf\Dompdf;
use Dompdf\Options;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Csrf\CsrfToken;
use Symfony\Component\Security\Csrf\CsrfTokenManagerInterface;
use Dompdf\Options as DompdfOptions;

use Symfony\Component\HttpFoundation\Session\SessionInterface;

class ForumsBackController extends AbstractController
{
    
    #[Route('/forumsback', name: 'app_forumsBack')]
    public function index(Request $request, ManagerRegistry $doctrine): Response
    {
        $em = $doctrine->getManager();
        
        // Récupération des paramètres
        $searchTerm = $request->query->get('search');
        $category = $request->query->get('category');
        $sort = $request->query->get('sort', 'newest');

        // Construction de la requête
        $qb = $em->createQueryBuilder()
            ->select('f')
            ->from(Forum::class, 'f');

        // Filtres
        if ($category && $category !== 'all') {
            $qb->andWhere('f.categorie = :category')
               ->setParameter('category', $category);
        }

        if ($searchTerm) {
            $qb->andWhere('f.description LIKE :search OR f.categorie LIKE :search')
               ->setParameter('search', '%'.$searchTerm.'%');
        }

        // Tri
        switch ($sort) {
            case 'oldest':
                $qb->orderBy('f.date', 'ASC');
                break;
            case 'popular':
                $qb->addSelect('COUNT(r.id) as HIDDEN reactionCount')
                   ->leftJoin('f.reactions', 'r')
                   ->groupBy('f.id')
                   ->orderBy('reactionCount', 'DESC');
                break;
            case 'newest':
            default:
                $qb->orderBy('f.date', 'DESC');
                break;
        }

        $forums = $qb->getQuery()->getResult();
       
        return $this->render('forums/forumsBack.html.twig', [
            'forums' => $forums,
            'current_category' => $category,
            'current_sort' => $sort,
            'current_search' => $searchTerm
        ]);
    }


    #[Route('/admin/forum/delete/{id}', name: 'app_admin_forum_delete', methods: ['POST'])]
public function adminDelete(
    Forum $forum,
    EntityManagerInterface $em,
    Request $request,
    CsrfTokenManagerInterface $csrfTokenManager
): Response {
    // Vérification CSRF uniquement
    $submittedToken = $request->request->get('_token');
    if (!$csrfTokenManager->isTokenValid(new CsrfToken('admin-delete-forum', $submittedToken))) {
        if ($request->isXmlHttpRequest()) {
            return $this->json([
                'success' => false,
                'message' => 'Token CSRF invalide'
            ], 403);
        }
        throw $this->createAccessDeniedException('Token CSRF invalide');
    }

    try {
        // Suppression directe sans vérification de rôle
        $em->remove($forum);
        $em->flush();

        if ($request->isXmlHttpRequest()) {
            return $this->json(['success' => true]);
        }

        $this->addFlash('success', 'Forum supprimé avec succès (admin)');
        return $this->redirectToRoute('app_forumsBack');

    } catch (\Exception $e) {
        if ($request->isXmlHttpRequest()) {
            return $this->json([
                'success' => false,
                'message' => 'Erreur lors de la suppression: '.$e->getMessage()
            ], 500);
        }
        $this->addFlash('error', 'Erreur lors de la suppression admin');
        return $this->redirectToRoute('app_forumsBack');
    }
}

   

   
   
}