<?php

namespace App\Contracts;

interface Notification
{

    public function setMessage(string $message);
    public function send();

}
