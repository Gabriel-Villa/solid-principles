<?php

namespace App\Access;

use App\Contracts\PayMethodInterface;

class Pay
{

    public $payMethod;

    public function __construct(PayMethodInterface $payMethod)
    {
        $this->payMethod = $payMethod;
    }

    public function goToPay()
    {
        $this->payMethod->pay(request());
    }

}
