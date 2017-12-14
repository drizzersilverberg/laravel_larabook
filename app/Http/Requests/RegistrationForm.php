<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegistrationForm extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
            'username' => 'required|unique:users',
            'email' => 'required|email|unique:users',
            'password' => 'required|confirmed',
        ];
    }

    /**
     * Get and customize the validations error messages.
     *
     * @return array
     */
    public function messages()
    {
        return [
            # you can override the rules' message error here ...
            'username.required' => 'The :attribute field is required for your identity.',
            // 'username.unique' => 'The :attribute has already been taken.',
            // 'email.required' => 'The :attribute field is required.',
            // 'email.email' => 'The :attribute must be a valid email address.',
            // 'email.unique' => 'The :attribute has already been taken.',
            // 'password.required' => 'The :attribute field is required.',
            // 'password.confirmed' => 'The :attribute confirmation does not match.',
        ];
    }
}
