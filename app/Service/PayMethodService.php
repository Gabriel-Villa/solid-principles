<?php

namespace App\Service;
use App\Contracts\PaypalPayMethod;
use App\Contracts\CreditCardPayMethod;

class PayMethodService
{

    public static function getPaymentMethodInstance($method)
    {

        if($method == 'paypal'){
            $instance = new PaypalPayMethod();
        }else if($method == 'creditCard'){
            $instance = new CreditCardPayMethod();
        }

        return $instance;

    }

}
