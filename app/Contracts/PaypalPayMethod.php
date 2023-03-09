<?php

namespace App\Contracts;

class PaypalPayMethod implements PayMethodInterface
{

    public function pay($request)
    {
        dd("Logic to pay with paypal");
    }

}
