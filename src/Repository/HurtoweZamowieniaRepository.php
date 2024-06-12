<?php

namespace App\Repository;

use App\Entity\HurtoweZamowienia;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<HurtoweZamowienia>
 *
 * @method HurtoweZamowienia|null find($id, $lockMode = null, $lockVersion = null)
 * @method HurtoweZamowienia|null findOneBy(array $criteria, array $orderBy = null)
 * @method HurtoweZamowienia[]    findAll()
 * @method HurtoweZamowienia[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class HurtoweZamowieniaRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, HurtoweZamowienia::class);
    }

    public function save(Hurtowe $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(HurtoweZamowienia $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }
}
