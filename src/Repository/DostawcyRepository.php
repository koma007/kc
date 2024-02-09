<?php

namespace App\Repository;

use App\Entity\Dostawcy;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Dostawcy>
 *
 * @method Dostawcy|null find($id, $lockMode = null, $lockVersion = null)
 * @method Dostawcy|null findOneBy(array $criteria, array $orderBy = null)
 * @method Dostawcy[]    findAll()
 * @method Dostawcy[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class DostawcyRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Dostawcy::class);
    }

//    /**
//     * @return Dostawcy[] Returns an array of Dostawcy objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('d')
//            ->andWhere('d.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('d.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?Dostawcy
//    {
//        return $this->createQueryBuilder('d')
//            ->andWhere('d.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
