<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterRequest;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    /*
     * Display a listing of the resource
     */
    public function index()
    {
        return view('register');
    }

    /*
     * Register user
     */
    public function store(RegisterRequest $request)
    {
        $request->validated();

        User::create([
            'username' => $request->input('username'),
            'email' => $request->input('email'),
            'image' => $request->file('image')->getClientOriginalName(),
            'password' => Hash::make($request->input('password')),
        ]);

        return redirect()->route('login')->with('success', 'User registered successfully!');
    }
}
