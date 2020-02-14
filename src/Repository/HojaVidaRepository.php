<?php

namespace App\Repository;

use App\Entity\HojaVida;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method HojaVida|null find($id, $lockMode = null, $lockVersion = null)
 * @method HojaVida|null findOneBy(array $criteria, array $orderBy = null)
 * @method HojaVida[]    findAll()
 * @method HojaVida[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class HojaVidaRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, HojaVida::class);
    }

    // /**
    //  * @return HojaVida[] Returns an array of HojaVida objects
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
    public function findOneBySomeField($value): ?HojaVida
    {
        return $this->createQueryBuilder('h')
            ->andWhere('h.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
