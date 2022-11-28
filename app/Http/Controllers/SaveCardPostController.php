<?php

namespace App\Http\Controllers;

use App\UseCases\SavePaymentMethodUseCase;
use App\UseCases\GetUserAsStripeCustomerUseCase;
use App\UseCases\SetDefaultPaymentMethod;

class SaveCardPostController extends Controller
{
    public function __invoke()
    {
        $paymentMethod = request()->paymentMethod;

        $email = 'epinaresg@gmail.com';

        $user = (new GetUserAsStripeCustomerUseCase())->__invoke($email);

        (new SavePaymentMethodUseCase())->__invoke($user, $paymentMethod);
        (new SetDefaultPaymentMethod())->__invoke($user, $paymentMethod);

        return response()->json([], 201);
    }
}
