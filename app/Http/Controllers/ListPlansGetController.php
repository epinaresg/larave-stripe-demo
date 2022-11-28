<?php

namespace App\Http\Controllers;

use App\UseCases\GetPlanPriceUseCase;
use App\UseCases\GetUserAsStripeCustomerUseCase;

class ListPlansGetController extends Controller
{
    private $useCase;
    private $email;
    public function __construct()
    {
        $this->email = session()->get('email');

        $this->useCase = new GetPlanPriceUseCase();
    }

    public function __invoke()
    {
        if (!$this->email) {
            return view('login');
        }

        (new GetUserAsStripeCustomerUseCase())->__invoke($this->email);

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
