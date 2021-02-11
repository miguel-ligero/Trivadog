<?php

namespace App\Repository;

use App\Entity\Tipohospedaje;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Tipohospedaje|null find($id, $lockMode = null, $lockVersion = null)
 * @method Tipohospedaje|null findOneBy(array $criteria, array $orderBy = null)
 * @method Tipohospedaje[]    findAll()
 * @method Tipohospedaje[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TipohospedajeRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Tipohospedaje::class);
    }

    // /**
    //  * @return Tipohospedaje[] Returns an array of Tipohospedaje objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('t')
            ->andWhere('t.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('t.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Tipohospedaje
    {
        return $this->createQueryBuilder('t')
            ->andWhere('t.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
