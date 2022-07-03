<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{
    public function index()
    {
        return view('profile');
    }

    public function update(ProfileUpdateRequest $request, $id)
    {
        $request->validated();

        $user = User::find($id);

        if ($request->file('image')) {
            $newImage = time() . '-' . $request->file('image')->getClientOriginalName();
            $request->file('image')->storeAs('public/images', $newImage);

            $user->update([
                'username' => $request->input('username'),
                'email' => $request->input('email'),
                'image' => $newImage,
                'password' => Hash::make($request->input('password')),
            ]);

            return redirect()->route('profile.index')->with('success', 'Profile updated successfully!');
        }

        $user->update([
            'username' => $request->input('username'),
            'email' => $request->input('email'),
            'password' => Hash::make($request->input('password')),
        ]);

        return redirect()->route('profile.index')->with('success', 'Profile updated successfully!');
    }
}
