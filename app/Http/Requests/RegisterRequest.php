<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'username' => 'required|min:3|max:120|unique:users,username',
            'email' => 'required|email|unique:users,email',
            'image' => 'required|image|mimes:png,jpeg,jpg,svg',
            'password' => 'required|min:6|max:125',
            'confirm_password' => 'required|same:password',
        ];
    }
}
