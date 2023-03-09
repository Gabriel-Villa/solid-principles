<?php

namespace App\Contracts;

class PaypalPayMethod implements PayMethodInterface
{

    public function pay($request)
    {
        dd("Login to pay with paypal");
    }

}
