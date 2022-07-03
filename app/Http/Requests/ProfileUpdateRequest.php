<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProfileUpdateRequest extends FormRequest
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
            'username' => 'required|min:3|max:120',
            'email' => 'required|email|exists:users',
            'image' => 'image|mimes:png,jpeg,jpg,svg',
            'city' => 'string|max:45|min:3|nullable',
            'phone' => 'string|max:14|min:9|nullable',
            'password' => 'required|min:6|max:125',
            'confirm_password' => 'required|same:password',
        ];
    }

    public function messages()
    {
        return [
            'email.exists' => 'You can\'t update your email!',
        ];
    }
}
