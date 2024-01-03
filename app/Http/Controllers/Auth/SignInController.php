<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\SignInRequest;
use Inertia\Inertia;

class SignInController extends Controller
{
    public function index()
    {
        return Inertia::render('Auth/SignIn');
    }

    public function store(SignInRequest $request)
    {
        if (!auth()->attempt($request->only('email', 'password'), $request->remember_me)) {
            return back()->with('error', 'Invalid login details');
        }

        return redirect()->route('welcome')->with('success', 'Connected!');
    }
}
