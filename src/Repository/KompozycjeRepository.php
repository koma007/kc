<?php

namespace App\Repository;

use App\Entity\Kompozycje;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Kompozycje>
 *
 * @method Kompozycje|null find($id, $lockMode = null, $lockVersion = null)
 * @method Kompozycje|null findOneBy(array $criteria, array $orderBy = null)
 * @method Kompozycje[]    findAll()
 * @method Kompozycje[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class KompozycjeRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Kompozycje::class);
    }

    public function save(Kompozycje $entity, bool $flush = false): void
    {

        dd('sssss');
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(Kompozycje $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return Kompozycje[] Returns an array of Kompozycje objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('k')
//            ->andWhere('k.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('k.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?Kompozycje
//    {
//        return $this->createQueryBuilder('k')
//            ->andWhere('k.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
