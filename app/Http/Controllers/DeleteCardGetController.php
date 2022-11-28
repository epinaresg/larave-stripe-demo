<?php

namespace App\Http\Controllers;

use App\UseCases\GetUserAsStripeCustomerUseCase;
use App\UseCases\DeletePaymentMethod;

class DeleteCardGetController extends Controller
{
    public function __invoke()
    {
        $email = 'epinaresg@gmail.com';

        $paymentMethod = request()->paymentMethod;

        $user = (new GetUserAsStripeCustomerUseCase())->__invoke($email);

        (new DeletePaymentMethod())->__invoke($user, $paymentMethod);

        return redirect()->back();
    }
}
