<?php

namespace App\Http\Controllers;

use App\Access\WspNotification;
use App\Contracts\PaypalPayMethod;
use App\Contracts\CreditCardPayMethod;
use App\Http\Requests\StoreUserRequest;
use App\Models\User;
use Illuminate\Http\Request;

class SolidController extends Controller
{


    public function singleResponsability(StoreUserRequest $request)
    {
        User::create($request->validated());

        return redirect()->route('users.create')->with('success', 'User created successfully.');
    }

    public function openClose(Request $request, CreditCardPayMethod $paymentMethod)
    {
        $paymentMethod->pay($request);
    }

    public function liskovSubstitution()
    {
    

    }


    public function interfaceSegregation(WspNotification $notification)
    {
        $notification->setMessage("Hello");
        $notification->setPhone("978123465");
        $notification->sendWsp();
    }
    

}
