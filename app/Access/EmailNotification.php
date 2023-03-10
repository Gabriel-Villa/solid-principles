<?php

namespace App\Access;

use App\Contracts\Notification;
use App\Contracts\EmailConfiguration;

class EmailNotification implements Notification, EmailConfiguration
{

    public $message;
    public $subject;

    public function setMessage(string $message)
    {
        $this->message = $message;
    }

    public function send()
    {
        dd("Logic to the email");
    }

    public function setSubject(string $subject)
    {
        $this->subject = $subject;
    }

}
