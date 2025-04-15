<?php

namespace App\Repository;

use App\Entity\Panier;
use App\Entity\User;
use App\Entity\Logistique;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

class PanierRepository extends ServiceEntityRepository
{
    private $_em;

    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Panier::class);
        $this->_em = $this->getEntityManager();
    }

    /**
     * Find or create a cart item for the user and logistique.
     */
    public function findOrCreateCart(User $user, Logistique $logistique): Panier
    {
        $cart = $this->createQueryBuilder('p')
            ->andWhere('p.user = :user')
            ->andWhere('p.logistique = :logistique')
            ->setParameter('user', $user)
            ->setParameter('logistique', $logistique)
            ->setMaxResults(1)
            ->getQuery()
            ->getOneOrNullResult();

        if (!$cart) {
            $cart = new Panier();
            $cart->setUser($user);
            $cart->setLogistique($logistique);
            $cart->setPrix($logistique->getPrix());
            $cart->setName($logistique->getNom());
            $cart->setImg($logistique->getImage());

            $this->_em->persist($cart);
            $this->_em->flush();
        }

        return $cart;
    }

    /**
     * Find all cart items for a specific user.
     */
    public function findCartByUser(User $user): array
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.user = :user')
            ->setParameter('user', $user)
            ->getQuery()
            ->getResult();
    }

    /**
     * Remove an item from the cart.
     */
    public function removeFromCart(Panier $cartItem): void
    {
        $this->_em->remove($cartItem);
        $this->_em->flush();
    }


  public function getTotalSumByUser($userId): float
  {
      $qb = $this->createQueryBuilder('p')
          ->select('SUM(p.prix)')  // Summing the price
          ->where('p.user = :userId')  // Filtering by user
          ->setParameter('userId', $userId);

      $result = $qb->getQuery()->getSingleScalarResult();  // Get the result of the sum
      return (float) $result;  // Return the result as a float
  }





  public function countItemsInCart($userId): int
  {
      $qb = $this->createQueryBuilder('p')
          ->select('COUNT(p.id_panier)')  // Counting the number of items
          ->where('p.user = :userId')  // Filtering by user
          ->setParameter('userId', $userId);

      $result = $qb->getQuery()->getSingleScalarResult();  // Get the result of the count
      return (int) $result;  // Return the result as an integer
  }








}



