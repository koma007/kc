<?php

namespace App\Repository;

use App\Entity\FvKody;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<FvKody>
 *
 * @method FvKody|null find($id, $lockMode = null, $lockVersion = null)
 * @method FvKody|null findOneBy(array $criteria, array $orderBy = null)
 * @method FvKody[]    findAll()
 * @method FvKody[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class FvKodyRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, FvKody::class);
    }

//    /**
//     * @return FvKody[] Returns an array of FvKody objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('f')
//            ->andWhere('f.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('f.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?FvKody
//    {
//        return $this->createQueryBuilder('f')
//            ->andWhere('f.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
