<?php

namespace App\Http\Controllers;

use App\UseCases\GetPlanPriceUseCase;
use App\UseCases\GetUserAsStripeCustomerUseCase;

class BuildSimpleChargePageGetController extends Controller
{
    public function __invoke(string $plan)
    {
        $email = 'america78@example.com';


        $user = (new GetUserAsStripeCustomerUseCase())->__invoke($email);

        $price = (new GetPlanPriceUseCase())->__invoke($plan);

        $priceToInteger = $price * 100;

        $payment = $user->pay(
            $priceToInteger
        );

        return view('simple-charge', [
            'client_secret' => $payment->client_secret
        ]);
    }
}
