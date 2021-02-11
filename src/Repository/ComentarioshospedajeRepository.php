<?php

namespace App\Repository;

use App\Entity\Comentarioshospedaje;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Comentarioshospedaje|null find($id, $lockMode = null, $lockVersion = null)
 * @method Comentarioshospedaje|null findOneBy(array $criteria, array $orderBy = null)
 * @method Comentarioshospedaje[]    findAll()
 * @method Comentarioshospedaje[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ComentarioshospedajeRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Comentarioshospedaje::class);
    }

    // /**
    //  * @return Comentarioshospedaje[] Returns an array of Comentarioshospedaje objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('c.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Comentarioshospedaje
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */

    public function save(Comentarioshospedaje $comment): Comentarioshospedaje{
        $em = $this->getEntityManager();
        $em->persist($comment);
        $em->flush();
        
        return $comment;
    }
}
