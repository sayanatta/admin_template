<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class LoginValidation extends FormRequest
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
            'email' => 'required|email',
            'password' => 'required|min:6'
        ];
    }
    public function messages()
    {
        return[
            'email.required'=> 'Please Enter Your Email.',
            'email.email'=> 'Email Must Be A Valid Email.',
            'password.required'=> 'Please Enter Your Password.',
            'password.min'=> 'Password Must Be 6 Character.',
        ];
    }
}
