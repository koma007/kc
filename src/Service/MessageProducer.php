<?php
// Plik do przetwarzania wiadomości z kolejki
// src/Service/MessageConsumer.php

namespace App\Service;

use PhpAmqpLib\Message\AMQPMessage;
use Doctrine\ORM\EntityManagerInterface;
use Psr\Log\LoggerInterface;
use OldSound\RabbitMqBundle\RabbitMq\ConsumerInterface;

class MessageConsumer implements ConsumerInterface
{
private $entityManager;
private $logger;

public function __construct(EntityManagerInterface $entityManager, LoggerInterface $logger)
{
$this->entityManager = $entityManager;
$this->logger = $logger;
}

public function execute(AMQPMessage $msg)
{
// Odbierz wiadomość z kolejki
$messageBody = $msg->getBody();

// Przetwórz wiadomość (tutaj możesz wykonać dowolną logikę)
$this->logger->info('Odebrano wiadomość: ' . $messageBody);

// Jeśli chcesz coś zapisać do bazy danych, możesz to zrobić tutaj używając EntityManagera
// $entity = new MojaEncja();
// $entity->setDane($messageBody);
// $this->entityManager->persist($entity);
// $this->entityManager->flush();
}
}
