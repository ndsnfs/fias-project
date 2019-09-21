<?php

namespace App\Repository;

use App\Entity\Ao;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method Ao|null find($id, $lockMode = null, $lockVersion = null)
 * @method Ao|null findOneBy(array $criteria, array $orderBy = null)
 * @method Ao[]    findAll()
 * @method Ao[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class AoRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Ao::class);
    }

    // /**
    //  * @return Ao[] Returns an array of Ao objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('a')
            ->andWhere('a.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('a.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Ao
    {
        return $this->createQueryBuilder('a')
            ->andWhere('a.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
