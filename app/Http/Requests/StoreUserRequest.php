<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUserRequest extends FormRequest
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
            'name' => 'nullable|min:3',
            'email' => 'nullable|email|unique:users',
            'phone' => 'nullable|regex:/[0-9]{9,}/',
            'birthday' => 'nullable|date',
            'address' => 'nullable|string',
            'about' => 'nullable|string',
            'image' => 'nullable|image'
        ];
    }

    public function attributes()
    {
        return [
            'name' => __('artribute.user_name'),
            'phone' => __('artribute.phone'),
            'birthday' => __('artribute.birthday'),
            'address' => __('artribute.address'),
            'about' => __('artribute.about'),
        ];
    }
}
