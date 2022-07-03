<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterRequest;
use App\Models\Profile;
use App\Models\User;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

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

        // Store image in storage folder
        $newImageName = time() . '-' . $request->file('image')->getClientOriginalName(); // get original file name
        $request->file('image')->storeAs('public/images', $newImageName);

        $user = User::create([
            'username' => $request->input('username'),
            'email' => $request->input('email'),
            'image' => $newImageName,
            'password' => Hash::make($request->input('password')),
        ]);

        Profile::create(['user_id' => $user->id, 'gender' => $request->input('gender')]);

        return redirect()->route('login')->with('success', 'User registered successfully!');
    }
}
