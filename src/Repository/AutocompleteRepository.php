<?php

namespace App\Repository;

use App\Entity\Autocomplete;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Autocomplete|null find($id, $lockMode = null, $lockVersion = null)
 * @method Autocomplete|null findOneBy(array $criteria, array $orderBy = null)
 * @method Autocomplete[]    findAll()
 * @method Autocomplete[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class AutocompleteRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Autocomplete::class);
    }

    // /**
    //  * @return Autocomplete[] Returns an array of Autocomplete objects
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
    public function findOneBySomeField($value): ?Autocomplete
    {
        return $this->createQueryBuilder('a')
            ->andWhere('a.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */

    public function busqueda (string $textobusqueda){

        $conn= $this->getEntityManager()->getConnection();

        $sql = "(SELECT * from autocomplete where tipo = 'H'
            AND textobusqueda LIKE :texto
            LIMIT 0,5)
            UNION ALL
            (SELECT * from autocomplete where tipo = 'L'
            AND textobusqueda LIKE :texto
            LIMIT 0,5)";

        $stmt = $conn->prepare($sql);
        $stmt ->execute(['texto'=> "%".$textobusqueda."%"]);
       
        return $stmt->fetchAll();
    }   
    
    public function insertHost($hostid){
        
        $conn= $this->getEntityManager()->getConnection();
        
        $sql = "INSERT INTO autocomplete (textobusqueda, tipo, admin1code, admin2code, admin3code, idhospedaje) 
        SELECT concat(ho.nombre,', ', au.textobusqueda),
            'H',
            ho.admin1code,
            ho.admin2code,
            ho.admin3code,
            ho.id
        FROM
            hospedaje AS ho
        JOIN autocomplete AS au 
        WHERE
            ho.id = $hostid
            and ho.admin2Code = au.admin2code 
            and ho.admin3Code = au.admin3code
            group by admin3code";
    
        $stmt = $conn->prepare($sql);
        $stmt ->execute();
        return $stmt;
    }

    public function editHost($hostid){
        
        $conn= $this->getEntityManager()->getConnection();

        /*Insertar hospedaje en autocomplete*/
        $sql = "INSERT INTO autocomplete (textobusqueda, tipo, admin1code, admin2code, admin3code, idhospedaje) 
        SELECT concat(ho.nombre,', ', au.textobusqueda),
            'H',
            ho.admin1code,
            ho.admin2code,
            ho.admin3code,
            ho.id
        FROM
            hospedaje AS ho
        JOIN autocomplete AS au 
        WHERE
            ho.id = $hostid
            and ho.admin2Code = au.admin2code 
            and ho.admin3Code = au.admin3code
            group by admin3code";
            
        try{
            $stmt = $conn->prepare($sql);
            $stmt ->execute();
        } catch (\Exception $e) {
            $querystatus = 'error' . $e;
        }
        
        return $stmt;
    }

    public function delete($geonameid)
    {   
        $conn = $this->getEntityManager()->getConnection();
        $sql = "DELETE FROM autocomplete WHERE id = $geonameid";
        $stmt = $conn->prepare($sql);
        $stmt->execute();
       
        return $stmt;
    }

}
