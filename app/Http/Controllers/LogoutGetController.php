<?php

namespace App\Http\Controllers;

class LogoutGetController extends Controller
{
    public function __invoke()
    {
        session()->forget('email');
        return redirect('/');
    }
}
