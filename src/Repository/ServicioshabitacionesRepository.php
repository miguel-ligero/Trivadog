<?php

namespace App\Repository;

use App\Entity\Servicioshabitaciones;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Servicioshabitaciones|null find($id, $lockMode = null, $lockVersion = null)
 * @method Servicioshabitaciones|null findOneBy(array $criteria, array $orderBy = null)
 * @method Servicioshabitaciones[]    findAll()
 * @method Servicioshabitaciones[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ServicioshabitacionesRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Servicioshabitaciones::class);
    }

    // /**
    //  * @return Servicioshabitaciones[] Returns an array of Servicioshabitaciones objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('s')
            ->andWhere('s.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('s.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Servicioshabitaciones
    {
        return $this->createQueryBuilder('s')
            ->andWhere('s.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */

    public function getChecked(Servicioshabitaciones $room): Servicioshabitaciones
    {
        $conn = $this->getEntityManager()->getConnection();
        $sql = "SELECT * FROM servicioshabitaciones WHERE idHabitacion = $room";
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        
        return $stmt;
    }

    public function deleterows($id)
    {   
        $conn = $this->getEntityManager()->getConnection();
        $sql = "DELETE FROM servicioshabitaciones WHERE idHabitacion = $id";
        $stmt = $conn->prepare($sql);
        $stmt->execute();
       
        return $stmt;
    }

    public function save($em)
    {
        $em->flush();
        return $em;
    }
}
