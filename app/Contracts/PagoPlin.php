<?php

namespace App\Contracts;

class PagoPlin implements MetodoPagoInterface
{

    public function pagar()
    {
        dd("Logica para pagar con plin");
    }

}
