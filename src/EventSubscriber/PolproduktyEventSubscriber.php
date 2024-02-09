<?php

namespace App\EventSubscriber;

use App\Entity\Polprodukty;
use Doctrine\ORM\EntityManagerInterface;
use EasyCorp\Bundle\EasyAdminBundle\Event\BeforeEntityPersistedEvent;
use EasyCorp\Bundle\EasyAdminBundle\Event\BeforeEntityDeletedEvent;
use EasyCorp\Bundle\EasyAdminBundle\Event\BeforeEntityUpdatedEvent;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\HttpKernel\Exception\AccessDeniedHttpException;

class PolproduktyEventSubscriber implements EventSubscriberInterface
{
    private $entityManager;

    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
    }

    public static function getSubscribedEvents(): array
    {

        return [
            BeforeEntityDeletedEvent::class => 'onBeforeEntityDeleted',
            BeforeEntityPersistedEvent::class => 'onBeforeEntityPersisted',
            BeforeEntityUpdatedEvent::class => 'onBeforeEntityUpdated',
        ];
    }

    public function onBeforeEntityDeleted(BeforeEntityDeletedEvent $event)
    {
        $entity = $event->getEntityInstance();

        if ($entity instanceof \App\Entity\Polprodukty) {
            $id = $entity->getId();

            // Sprawdź, czy Polprodukty ma zablokowany identyfikator
            if ($this->isBlockedId($id)) {
                throw new AccessDeniedHttpException('Nie możesz usunąć tego półproduktu - należy on do stałych elementów arkusza Wycen.');
            }
        }
    }

    private function isBlockedId(int $id): bool
    {
        // Zdefiniuj zablokowane identyfikatory Polproduktyów
        $blockedIds = [1, 2, 3, 4, 5, 6, 7, 8, 9];

        return in_array($id, $blockedIds);
    }

    public function onBeforeEntityUpdated(BeforeEntityUpdatedEvent $event)
    {
        $entity = $event->getEntityInstance();

        if ($entity instanceof Polprodukty) {

            $dostawca = $entity->getDostawcy();

            if ($dostawca !== null) {
                $entity->setDostawca($dostawca);
            }

            $this->entityManager->persist($entity);
            $this->entityManager->flush();
        }
    }
    public function onBeforeEntityPersisted(BeforeEntityPersistedEvent $event)
    {
        $entity = $event->getEntityInstance();

        if ($entity instanceof Polprodukty) {

            $dostawca = $entity->getDostawcy();

            if ($dostawca !== null) {
                $entity->setDostawca($dostawca);
            }

            $this->entityManager->persist($entity);
            $this->entityManager->flush();
        }
    }
}
