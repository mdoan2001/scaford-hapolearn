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

    public function messages()
    {
        return [
            'required' => ':attribute bắt buộc phải nhập',
            'min' => ':attribute phải có ít nhất :min ký tự'
        ];
    }

    public function attributes()
    {
        return [
            'user_name' => 'Tên đăng nhập',
            'password' => 'Mật khẩu'
        ];
    }
}
