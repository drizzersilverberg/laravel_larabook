<?php

namespace App\Http\Controllers;
use App\User;
use App\Http\Requests\RegistrationForm;

class RegistrationController extends Controller
{
    public function create()
    {
        return view('registration.create');
    }

    public function store(RegistrationForm $request)
    {
        $user = User::create(
            $request->only('username', 'email', 'password')
        );

        \Auth::login($user);

        return redirect()->route('home');
    }
}
