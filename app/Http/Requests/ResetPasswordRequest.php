<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ResetPasswordRequest extends FormRequest
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
            'email' => 'required|email|exists:users',
            'password' => 'required|regex:/^(?=.*[A-Za-z])(?=.*\d)(?=.*[@$!%*#?&])[A-Za-z\d@$!%*#?&]{8,}$/u',
            'password_confirmation' => 'required|required_with:password|same:password'
        ];
    }

    public function messages()
    {
        return [
            'password.regex' => __('message.register_password'),
        ];
    }

    public function attributes()
    {
        return [
            'password' => __('artribute.password'),
            'password_confirmation' => __('artribute.password_confirmation')
        ];
    }
}
