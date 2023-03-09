<?php

namespace App\Access;

use App\Contracts\Notification;

class EmailNotification implements Notification
{

    public $message;
    public $subject;

    public function setMessage(string $message)
    {
        $this->message = $message;
    }

    public function setSubject(string $subject)
    {
        $this->subject = $subject;
    }


    public function sendEmail()
    {
        dd("Logic to send email");
    }

}
