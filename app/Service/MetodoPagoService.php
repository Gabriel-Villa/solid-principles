<?php

namespace App\Service;

use App\Contracts\MetodoPagoInterface;
use App\Contracts\PagoPlin;
use App\Contracts\PagoYape;

class MetodoPagoService
{

    public static function getMethodPayInstance(string $methodPayment)
    {

        switch ($methodPayment) {
            case 'plin':
                return new PagoPlin();
            case 'yape':
                return new PagoYape();
        }
    }

}
