<?php

namespace App\UseCases;

use App\Models\User;
use App\Repositories\UserRespository;

class GetUserAsStripeCustomerUseCase
{
    private UserRespository $repository;
    public function __construct()
    {
        $this->repository = new UserRespository();
    }

    public function __invoke(string $email): User
    {
        $user = $this->repository->byEmail($email);

        if (!$user) {
            $user = $this->repository->create($email);
        }

        if (!$user->stripe_id) {
            $user->createAsStripeCustomer();
        }

        return $user;
    }
}
