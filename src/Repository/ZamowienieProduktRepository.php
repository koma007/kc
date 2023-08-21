<?php

namespace App\Repository;

use App\Entity\ZamowienieProdukt;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<ZamowienieProdukt>
 *
 * @method ZamowienieProdukt|null find($id, $lockMode = null, $lockVersion = null)
 * @method ZamowienieProdukt|null findOneBy(array $criteria, array $orderBy = null)
 * @method ZamowienieProdukt[]    findAll()
 * @method ZamowienieProdukt[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ZamowienieProduktRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ZamowienieProdukt::class);
    }

    public function save(ZamowienieProdukt $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(ZamowienieProdukt $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return ZamowienieProdukt[] Returns an array of ZamowienieProdukt objects
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

//    public function findOneBySomeField($value): ?ZamowienieProdukt
//    {
//        return $this->createQueryBuilder('z')
//            ->andWhere('z.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
