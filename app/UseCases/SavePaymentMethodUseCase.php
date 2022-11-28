<?php

namespace App\UseCases;

use App\Models\User;

class SavePaymentMethodUseCase
{
    public function __construct()
    {
    }

    public function __invoke(User $user, string $paymentMethod): void
    {
        $user->addPaymentMethod($paymentMethod);
    }
}
