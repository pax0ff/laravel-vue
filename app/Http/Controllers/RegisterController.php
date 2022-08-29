<?php

namespace App\Http\Controllers;


use App\Models\User;
use App\Http\Requests\RegisterRequest;

class RegisterController extends Controller
{
    public function register(RegisterRequest $request)
    {
        $user = User::create($request->validated());

        auth()->login($user);

        return redirect('/dashboard')->with('success', "Account successfully registered.");
    }
}
