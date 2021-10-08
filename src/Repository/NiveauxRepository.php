<?php

namespace App\Repository;

use App\Entity\Niveaux;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Niveaux|null find($id, $lockMode = null, $lockVersion = null)
 * @method Niveaux|null findOneBy(array $criteria, array $orderBy = null)
 * @method Niveaux[]    findAll()
 * @method Niveaux[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class NiveauxRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Niveaux::class);
    }

    // /**
    //  * @return Niveaux[] Returns an array of Niveaux objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('n')
            ->andWhere('n.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('n.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Niveaux
    {
        return $this->createQueryBuilder('n')
            ->andWhere('n.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
