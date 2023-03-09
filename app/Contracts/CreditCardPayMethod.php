<?php

namespace App\Contracts;

class CreditCardPayMethod implements PayMethodInterface
{

    public function pay($request)
    {
        dd("Login to pay with credit card");
    }

}
