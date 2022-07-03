<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index() {
        return view('profile');
    }

    public function update(ProfileUpdateRequest $request) {
        dd($request->all());
    }
}
