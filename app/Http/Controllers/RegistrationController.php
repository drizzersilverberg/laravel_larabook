<?php

namespace App\Http\Controllers;

use App\User;

use Illuminate\Http\Request;

class RegistrationController extends Controller
{
    public function create()
    {
        return view('registration.create');
    }

    public function store()
    {
        $user = User::create(
            \Request::only('username', 'email', 'password')
        );

        \Auth::login($user);

        return redirect()->route('home');
    }
}
