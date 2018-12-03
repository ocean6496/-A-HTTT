<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
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
            'fullname' => 'required',
            'email' => 'required',
            'subject' => 'required',
            'content' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'fullname.required' => 'Vui lòng nhập họ tên!',
            'email.required' => 'Vui lòng nhập Email!',
            'subject.required' => 'Vui lòng nhập chủ đề!',
            'content.required' => 'Vui lòng nhập nội dung!',
        ];
    }
}
