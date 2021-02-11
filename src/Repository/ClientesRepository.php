<?php

namespace App\Repository;

use App\Entity\Clientes;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Clientes|null find($id, $lockMode = null, $lockVersion = null)
 * @method Clientes|null findOneBy(array $criteria, array $orderBy = null)
 * @method Clientes[]    findAll()
 * @method Clientes[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ClientesRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Clientes::class);
    }

    // /**
    //  * @return Clientes[] Returns an array of Clientes objects
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

    
    public function findOneByEmail($value): ?Clientes
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.email = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }

    public function save(Clientes $customer): Clientes{
        $em = $this->getEntityManager();
        $em->persist($customer);
        $em->flush();
        return $customer;
    }

    public function findByRoomByProvider($id, $limit = ""):Array
    {
        $conn = $this->getEntityManager()->getConnection();
        
        $sql = <<<EOF
            SELECT
                ha.nombre AS nombrehabitacion, ha.id AS idhabitacion,
                ho.nombre AS nombrehospedaje, ho.id AS idhospedaje,
                cli.nombre AS nombreproveedor, cli.id AS idproveedor,
                mu.nombrefichero
            FROM
                habitaciones ha
            INNER JOIN hospedaje ho ON
                ha.idHospedaje = ho.id
            INNER JOIN clientes cli ON
                ho.idproveedor = cli.id
            INNER JOIN multimedia mu ON
                mu.idhabitacion = ha.id
            WHERE
                cli.id = $id
                AND
                mu.principal = 1
            $limit
            EOF;
        $stmt = $conn->prepare($sql);
        $stmt->execute();
            
        return $stmt->fetchAll();
    }
}
