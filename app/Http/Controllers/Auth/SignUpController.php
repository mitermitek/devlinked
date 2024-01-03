<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\SignUpRequest;
use App\Models\User;
use Inertia\Inertia;

class SignUpController extends Controller
{
    public function index()
    {
        return Inertia::render('Auth/SignUp');
    }

    public function store(SignUpRequest $request)
    {
        User::create($request->validated());

        return redirect()->route('auth.sign-in.index')->with('success', 'Account created!');
    }
}
