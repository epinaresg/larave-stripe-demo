<?php

namespace App\UseCases;

use App\Models\User;

class DeletePaymentMethod
{
    public function __construct()
    {
    }

    public function __invoke(User $user, string $paymentMethod): void
    {
        $paymentMethod = $user->findPaymentMethod($paymentMethod);
        $paymentMethod->delete();
    }
}
