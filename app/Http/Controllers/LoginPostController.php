<?php

namespace App\Http\Controllers;

use App\Models\User;

class LoginPostController extends Controller
{
    public function __invoke()
    {
        $email = request()->email;

        session()->put('email', $email);

        return redirect()->back();
    }
}
