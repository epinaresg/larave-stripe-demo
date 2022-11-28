<?php

namespace App\Http\Controllers;

use App\UseCases\GetUserAsStripeCustomerUseCase;
use App\UseCases\SetDefaultPaymentMethod;

class SetDefaultCardGetController extends Controller
{
    public function __invoke()
    {
        $email = 'epinaresg@gmail.com';

        $paymentMethod = request()->paymentMethod;

        $user = (new GetUserAsStripeCustomerUseCase())->__invoke($email);

        (new SetDefaultPaymentMethod())->__invoke($user, $paymentMethod);

        return redirect()->back();
    }
}
