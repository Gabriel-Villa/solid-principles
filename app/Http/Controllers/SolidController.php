<?php

namespace App\Http\Controllers;

use App\Service\MetodoPagoService;
use Illuminate\Http\Request;

class SolidController extends Controller
{

    public $metodo;

    public function __construct()
    {
        $this->metodo = 'plin';
    }

    public function openClose()
    {
        
        $paymentMethod = MetodoPagoService::getMethodPayInstance($this->metodo);

        $paymentMethod->pagar();

    }

}
