<?php

namespace App\Repository;

use App\Entity\Reservas;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Reservas|null find($id, $lockMode = null, $lockVersion = null)
 * @method Reservas|null findOneBy(array $criteria, array $orderBy = null)
 * @method Reservas[]    findAll()
 * @method Reservas[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ReservasRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Reservas::class);
    }

    // /**
    //  * @return Reservas[] Returns an array of Reservas objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('r')
            ->andWhere('r.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('r.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Reservas
    {
        return $this->createQueryBuilder('r')
            ->andWhere('r.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */

    public function save(Reservas $reserve): Reservas
    {
        $em = $this->getEntityManager();
        $em->persist($reserve);
        $em->flush();

        return $reserve;
    }

    public function findbyfilter($id, $typehosting, $limit): ?Array
    {
        $conn = $this->getEntityManager()->getConnection();
        $sql = <<<EOF
            SELECT DISTINCT
                ha.id AS idhabitacion, ha.nombre AS nombrehabitacion, ha.mediaValoracion, ha.mediaValoracionMascotas, ha.numComentarios, ha.precio,
                ho.nombre AS nombrehospedaje, ho.ciudad, ho.telefono, ho.idTipoHospedaje,
                mu.nombrefichero, mu.principal,
                ti.nombre AS nombretipo
            FROM
                `reservas` re
            INNER JOIN multimedia mu ON re.idHabitacion = mu.idHabitacion
            INNER JOIN habitaciones ha ON ha.id = re.idHabitacion
            INNER JOIN hospedaje ho ON ho.id = ha.idHospedaje
            INNER JOIN tipohospedaje ti ON ti.id = ho.idTipoHospedaje
            WHERE
                re.idCliente = $id
            $typehosting
            AND
                mu.principal = 1
            $limit
            EOF;

        $stmt = $conn->prepare($sql);
        $stmt->execute();

        return $stmt->fetchAll();
    }

    public function findbyprovider($providerid, $limit, $room): ?Array
    {
        $conn = $this->getEntityManager()->getConnection();
        $sql = <<<EOF
            SELECT
                re.id, re.idCliente, re.idHabitacion, re.fechaInicio, re.fechaFin, re.precio, re.adultos, re.infantiles, re.mascotas,
                ha.precio AS precio_noche 
            FROM
                reservas re
            INNER JOIN habitaciones ha ON
                re.idHabitacion = ha.id
            INNER JOIN hospedaje ho ON
                ho.id = ha.idHospedaje
            INNER JOIN clientes cli ON
                cli.id = ho.idProveedor
            WHERE
                ho.idProveedor = $providerid
            $room
            $limit
            EOF;
        $stmt = $conn->prepare($sql);
        $stmt->execute();

        return $stmt->fetchAll();
    }

    public function delete($reserveid)
    {
        //dd($reserveid);
        $em = $this->getEntityManager();
        $em->remove($reserveid);
        //dd($em);
        $em->flush();
        

        return $reserveid;
    }
}
