<?php

namespace App\Access;

use App\Contracts\Notification;

class WspNotification implements Notification
{

    public $message;
    public $phone;

    public function setMessage(string $message)
    {
        $this->message = $message;
    }

    public function send()
    {
        dd("Logic to send wsp");
    }

    public function setPhone(string $phone)
    {
        $this->phone = $phone;
    }

}
