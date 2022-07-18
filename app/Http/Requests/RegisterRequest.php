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
            'user_name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8',
            'password_confirmation' => 'required|string|min:8|required_with:password|same:password'
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
