<?php

namespace App\Http\Controllers;

use App\UseCases\GetUserAsStripeCustomerUseCase;

class BuildSaveCardPageGetController extends Controller
{
    public function __invoke()
    {
        $email = 'epinaresg@gmail.com';

        $user = (new GetUserAsStripeCustomerUseCase())->__invoke($email);

        dump($user->hasPaymentMethod());

        $intent = $user->createSetupIntent();


        return view('save-card', [
            'client_secret' => $intent->client_secret
        ]);
    }
}
