<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UtilityRequest extends FormRequest
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
            'uname' => 'required|min:5',
        ];
    }

    public function messages()
    {
        return [
            'uname.required' => 'Vui lòng nhập tên tiện ích!',
            'uname.min' => 'Vui lòng nhập ít nhất 5 ký tự!'
        ];
    }
}
