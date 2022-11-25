<?php

namespace App\UseCases;

use App\Models\User;

class CreateCardUseCase
{
    public function __construct()
    {
    }

    public function __invoke(User $user, string $paymentMethod): void
    {
        $user->addPaymentMethod($paymentMethod);
    }
}
