<?php

namespace App\Message;

class RegisterUserNotification
{
//command,
// moze wygladac jak ja chce
//dostarcza date

    public function __construct(
        private string $content,
    ) {
    }

    public function getContent(): string
    {
        return $this->content;
    }
}