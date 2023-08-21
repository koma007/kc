<?php

namespace App\EventSubscriber;

use Doctrine\ORM\EntityManagerInterface;
use EasyCorp\Bundle\EasyAdminBundle\Event\BeforeEntityDeletedEvent;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\HttpFoundation\Response;
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
        ];
    }

    public function onBeforeEntityDeleted(BeforeEntityDeletedEvent $event)
    {
        $entity = $event->getEntityInstance();

        // Sprawdź, czy jest to Polprodukty
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
}
