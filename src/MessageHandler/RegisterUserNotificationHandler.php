<?php

namespace App\MessageHandler;

use App\Message\RegisterUserNotification;
use Symfony\Component\Messenger\Attribute\AsMessageHandler;


#[AsMessageHandler]
class RegisterUserNotificationHandler
{
    //uruchamiana kiedy RegisterUser dispatched
    // rożne operacja, np:
    //Get user data from database
    // Create an email from template

    // Send email
    //sleep(5); //np skalowanie obrazkow moze bardzo dlugo trwac

    // ... other stuff which can take a while ...
    public function __invoke(RegisterUserNotification $registerUserNotification){
        dump($registerUserNotification);
    }
}