<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LoginRequest extends FormRequest
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
            'user_name' => 'required|regex:/^\S*$/u',
            'password' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'user_name.regex' => __('message.login_uername'),
        ];
    }

    public function attributes()
    {
        return [
            'user_name' => __('artribute.user_name'),
            'password' => __('artribute.password'),
        ];
    }
}
