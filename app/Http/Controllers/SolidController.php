<?php

namespace App\Http\Controllers;

use App\Contracts\PrecioDolar2022;
use App\Contracts\PrecioDolar2023;
use Illuminate\Http\Request;

class SolidController extends Controller
{

    public function openClose(PrecioDolar2023 $precioDolar)
    {
        // PrecioDolarBcp
        dd($precioDolar->getPrecio());

    }

}
