<?php

namespace App\Http\Controllers;

use App\UseCases\GetPlanPriceUseCase;
use App\UseCases\GetUserAsStripeCustomerUseCase;

class ListPlansGetController extends Controller
{
    private $useCase;
    public function __construct()
    {
        $this->useCase = new GetPlanPriceUseCase();
    }

    public function __invoke()
    {
        $email = 'epinaresg@gmail.com';

        (new GetUserAsStripeCustomerUseCase())->__invoke($email);

        return view('list-plans', [
            'byMonth' => [
                'bronze' => $this->useCase->__invoke('bronze'),
                'silver' => $this->useCase->__invoke('silver'),
                'gold' => $this->useCase->__invoke('gold'),
            ],
            'bySubscription' => [
                'bronze' => $this->useCase->__invoke('bronze_subscription'),
                'silver' => $this->useCase->__invoke('silver_subscription'),
                'gold' => $this->useCase->__invoke('gold_subscription'),
            ]
        ]);
    }
}
