<?php

namespace App\Service;

use App\Entity\User;
use App\Entity\Zamowienie;
use App\Entity\ZamowienieProdukt;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\SecurityBundle\Security;
use Symfony\Component\Security\Core\Authorization\AuthorizationCheckerInterface;

class UserKoszykUpdateService
{
    private $entityManager;

    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
    }
    public function synchronizeKoszykWithUser(int $zamId, int $userId)
    {


        $queryBuilder = $this->entityManager->createQueryBuilder();

        $queryBuilder->update(ZamowienieProdukt::class, 'zp')
            ->set('zp.userId', ':user')
            ->where('zp.zamowienieRef = :zamowienieRef')
            ->andWhere('zp.userId IS NULL')
            ->setParameter('user', $userId)
            ->setParameter('zamowienieRef', $zamId);

        $query = $queryBuilder->getQuery();
        $query->execute();
    }

}