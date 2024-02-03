<?php

namespace App\Repository;

use App\Entity\Zeszyt2;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Zeszyt2>
 *
 * @method Zeszyt2|null find($id, $lockMode = null, $lockVersion = null)
 * @method Zeszyt2|null findOneBy(array $criteria, array $orderBy = null)
 * @method Zeszyt2[]    findAll()
 * @method Zeszyt2[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class Zeszyt2Repository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Zeszyt2::class);
    }

//    /**
//     * @return Zeszyt[] Returns an array of Zeszyt objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('z')
//            ->andWhere('z.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('z.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?Zeszyt
//    {
//        return $this->createQueryBuilder('z')
//            ->andWhere('z.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
