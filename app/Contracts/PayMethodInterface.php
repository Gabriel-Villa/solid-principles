<?php

namespace App\Contracts;

interface PayMethodInterface
{
    public function pay($request);
}
