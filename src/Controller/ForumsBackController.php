<?php

namespace App\Controller;

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


   

   
   
}