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
     * @return array
     */
    public function rules()
    {
        return [
            'user_name' => 'required|string|unique:users|max:255|regex:/^\S*$/u',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|regex:/^(?=.*[A-Za-z])(?=.*\d)(?=.*[@$!%*#?&])[A-Za-z\d@$!%*#?&]{8,}$/u',
            'password_confirmation' => 'required|required_with:password|same:password'
        ];
    }

    public function messages()
    {
        return [
            'password.regex' => __('message.register_password'),
            'user_name.regex' => __('message.login_uername'),
        ];
    }

    public function attributes()
    {
        return [
            'user_name' => __('artribute.user_name'),
            'password' => __('artribute.password'),
            'password_confirmation' => __('artribute.password_confirmation')
        ];
    }
}
