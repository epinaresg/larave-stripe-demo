<?php

namespace App\Http\Controllers;

use App\UseCases\CreateCardUseCase;
use App\UseCases\GetUserAsStripeCustomerUseCase;

class SaveCardPostController extends Controller
{
    public function __invoke()
    {
        $paymentMethod = request()->paymentMethod;

        $email = 'epinaresg@gmail.com';

        $user = (new GetUserAsStripeCustomerUseCase())->__invoke($email);

        (new CreateCardUseCase())->__invoke($user, $paymentMethod);

        return response()->json([], 201);
    }
}
