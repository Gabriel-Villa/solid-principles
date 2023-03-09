<?php

namespace App\Contracts;

class CreditCardPayMethod implements PayMethodInterface
{

    public function pay($request)
    {
        dd("Logic to pay with credit card");
    }

}
