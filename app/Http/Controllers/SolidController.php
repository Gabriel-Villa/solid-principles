<?php

namespace App\Http\Controllers;

use App\Access\WspNotification;
use App\Access\EmailNotification;
use App\Access\Pay;
use App\Contracts\CreditCardPayMethod;
use App\Contracts\PaypalPayMethod;
use App\Http\Requests\StoreUserRequest;
use App\Models\User;
use App\Service\PayMethodService;
use Illuminate\Http\Request;

class SolidController extends Controller
{

    public $method;

    public function __construct()
    {
        $this->method = 'paypal';
    }

    public function singleResponsability(StoreUserRequest $request)
    {
        User::create($request->validated());

        return redirect()->route('users.create')->with('success', 'User created successfully.');
    }

    public function openClose(Request $request)
    {
        $payMethod = PayMethodService::getPaymentMethodInstance($this->method);
        $payMethod->pay($request);
    }

    public function liskovSubstitution()
    {
    
        // Same types 
        // Same arguments
        // Dont go againt the father
        // Dont modify schem

    }

    public function interfaceSegregation(EmailNotification $notification)
    {
        
        $notification->setMessage("Lorem Ipsum is simply dummy text of ...");

        $notification->setSubject("Hi");

        $notification->send();

    }
    
    public function dependencyInversion()
    {

        $operation = (new Pay(new PaypalPayMethod()))->goToPay();

    }    

}
