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
            'user_name' => 'required|min:6',
            'password' => 'required',
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
