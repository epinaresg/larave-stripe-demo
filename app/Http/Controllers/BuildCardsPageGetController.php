<?php

namespace App\Http\Controllers;

use App\UseCases\GetUserAsStripeCustomerUseCase;

class BuildCardsPageGetController extends Controller
{
    public function __invoke()
    {
        $email = 'epinaresg@gmail.com';

        $user = (new GetUserAsStripeCustomerUseCase())->__invoke($email);

        $intent = $user->createSetupIntent();

        return view('cards', [
            'client_secret' => $intent->client_secret,
            'defaultPaymentMethod' => $user->defaultPaymentMethod(),
            'hasPaymentMethods' => $user->hasPaymentMethod(),
            'paymentMethods' => $user->paymentMethods()
        ]);
    }
}
