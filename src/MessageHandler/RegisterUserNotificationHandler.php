<?php

namespace App\MessageHandler;

use App\Message\RegisterUserNotification;
use Symfony\Component\Messenger\Attribute\AsMessageHandler;


#[AsMessageHandler]
class RegisterUserNotificationHandler
{
    //uruchamiana kiedy RegisterUser dispatched
    public function __invoke(RegisterUserNotification $registerUserNotification){
        dump($registerUserNotification);
    }
}