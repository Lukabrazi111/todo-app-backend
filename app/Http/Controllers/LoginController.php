<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view('login');
    }

    public function store(LoginRequest $request)
    {
        $request->validated();

        $fieldType = filter_var($request->input('username'), FILTER_VALIDATE_EMAIL) ? 'email' : 'username';

        if (Auth::attempt([$fieldType => $request->input('username'), 'password' => $request->input('password')])) {
            return redirect()->route('index');
        }

        return redirect()->route('login')->with('error', 'Incorrect credentials!');
    }

    public function logout()
    {
        auth()->logout();
        return redirect()->route('login')->with('success', 'User logged out successfully!');
    }
}
