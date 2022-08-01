<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreReplyRequest extends FormRequest
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
            'course_id' => 'required|integer',
            'content' => 'required',
            'review_id' => 'required|integer',
        ];
    }

    public function attributes()
    {
        return [
            'comment' => __('artribute.comment'),
            'user_id' => __('artribute.user_id'),
            'review_id' => __('artribute.review_id'),
        ];
    }
}
