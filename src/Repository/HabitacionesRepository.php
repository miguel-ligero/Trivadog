<?php

namespace App\Repository;

use App\Entity\Habitaciones;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Habitaciones|null find($id, $lockMode = null, $lockVersion = null)
 * @method Habitaciones|null findOneBy(array $criteria, array $orderBy = null)
 * @method Habitaciones[]    findAll()
 * @method Habitaciones[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class HabitacionesRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Habitaciones::class);
    }

    // /**
    //  * @return Habitaciones[] Returns an array of Habitaciones objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('h')
            ->andWhere('h.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('h.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Habitaciones
    {
        return $this->createQueryBuilder('h')
            ->andWhere('h.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */

    public function getFavorites($column, $limit=3):array 
    { 
        $conn = $this->getEntityManager()->getConnection();
        $sql = "SELECT * FROM habitaciones ORDER BY $column DESC LIMIT $limit";
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        
        return $stmt->fetchAll();
    }

    public function getHost($limit, $destination, $typehosting, $from, $to, $adults = 0, $children = 0, $pets = 0):array
    {
        $conn = $this->getEntityManager()->getConnection();
        
        $sql = <<<EOF
            SELECT DISTINCT
                ha.id AS idHabitacion,
                ha.nombre AS nombreHabitacion,
                ha.numAdultos,
                ha.numInfantiles,
                ha.numMascotas,
                ha.mediaValoracion,
                ha.mediaValoracionMascotas,
                ha.numComentarios,
                ha.precio,
                ho.id AS idHotel,
                ho.nombre AS nombreHotel,
                ho.descripcion,
                ho.direccion,
                ho.ciudad,
                ho.telefono,
                ho.email,
                tiho.id AS idTipoHospedaje,
                tiho.nombre AS nombreTipoHospedaje,
                mu.nombrefichero
            FROM
                hospedaje ho
            INNER JOIN habitaciones ha ON
                ha.idHospedaje = ho.id
            INNER JOIN tipohospedaje tiho ON
                ho.idTipoHospedaje = tiho.id
            LEFT JOIN multimedia mu ON
                ha.id = mu.idHabitacion
            WHERE
                ha.activo = 1 AND
                $destination 
                AND (
                    tiho.id = $typehosting OR $typehosting = 0
                ) AND (
                    ha.numAdultos = $adults OR $adults = 0
                ) AND (
                    ha.numInfantiles = $children OR $children = 0
                ) AND (
                    ha.numMascotas = $pets OR $pets = 0
                ) AND mu.principal = 1 
                AND ha.id NOT IN(
                    SELECT idHabitacion 
                    FROM reservas 
                    WHERE ( idHabitacion = ha.id ) 
                    AND (('$from' BETWEEN fechaInicio AND date_sub(fechaFin, interval +1 day)) 
                    OR ('$to' BETWEEN date_sub(fechaInicio, interval -1 day) 
                    AND fechaFin) 
                    OR (fechaInicio <= '$from' AND fechaFin >= '$to') 
                    OR (fechaInicio >= '$from' AND fechaFin <= '$to'))
            )
            GROUP BY ho.id
            $limit
            EOF;
        
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        
        return $stmt->fetchAll();
    }
    
    public function getRooms($limit, $destination, $typehosting, $host, $from, $to, $adults = 0, $children = 0, $pets = 0):array
    {
        /* dump($adults, $children, $pets); */
        $conn = $this->getEntityManager()->getConnection();
        
        $sql = <<<EOF
            SELECT DISTINCT
                ha.id AS idHabitacion,
                ha.nombre AS nombreHabitacion,
                ha.numAdultos,
                ha.numInfantiles,
                ha.numMascotas,
                ha.mediaValoracion,
                ha.mediaValoracionMascotas,
                ha.numComentarios,
                ha.precio,
                ho.id AS idHotel,
                ho.nombre AS nombreHotel,
                ho.descripcion,
                ho.direccion,
                ho.ciudad,
                ho.telefono,
                ho.email,
                tiho.id AS idTipoHospedaje,
                tiho.nombre AS nombreTipoHospedaje,
                mu.nombrefichero
            FROM
                hospedaje ho
            INNER JOIN habitaciones ha ON
                ha.idHospedaje = ho.id
            INNER JOIN tipohospedaje tiho ON
                ho.idTipoHospedaje = tiho.id
            LEFT JOIN multimedia mu ON
                ha.id = mu.idHabitacion
            WHERE
                ha.activo = 1 AND
                $destination 
                AND
                    ho.nombre = $host
                AND (
                    tiho.id = $typehosting OR $typehosting = 0
                ) AND (
                    ha.numAdultos = $adults OR $adults = 0
                ) AND (
                    ha.numInfantiles = $children OR $children = 0
                ) AND (
                    ha.numMascotas = $pets OR $pets = 0
                ) AND mu.principal = 1 
                AND ha.id NOT IN(
                    SELECT idHabitacion 
                    FROM reservas 
                    WHERE ( idHabitacion = ha.id ) 
                    AND (('$from' BETWEEN fechaInicio AND date_sub(fechaFin, interval +1 day)) 
                    OR ('$to' BETWEEN date_sub(fechaInicio, interval -1 day) 
                    AND fechaFin) 
                    OR (fechaInicio <= '$from' AND fechaFin >= '$to') 
                    OR (fechaInicio >= '$from' AND fechaFin <= '$to'))
            )
            Order by ha.nombre 
            $limit
            EOF;
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        
        return $stmt->fetchAll();
    }

    public function save(Habitaciones $room): Habitaciones
    {
        $em = $this->getEntityManager();
        $em->persist($room);
        $em->flush();

        return $room;
    }

    public function delete($room)
    {
        $em = $this->getEntityManager();
        $em->remove($room);
        $em->flush();

        return $room;
    }
}
