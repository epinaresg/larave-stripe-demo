<?php

namespace App\Repositories;

use App\Models\User;

class UserRespository
{
    public function create(string $emai): ?User
    {
        return User::create(['email', $emai]);
    }

    public function byEmail(string $emai): ?User
    {
        return User::where('email', $emai)->first();
    }
}
