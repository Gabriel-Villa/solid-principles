<?php

namespace App\Access;

use App\Contracts\Notification;
use App\Contracts\WspConfiguration;

class WspNotification implements Notification, WspConfiguration
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
