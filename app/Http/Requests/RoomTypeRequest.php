<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RoomTypeRequest extends FormRequest
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
            'tname' => 'required|min:6'
        ];
    }

    public function messages()
    {
        return [
            'tname.required' => 'Vui lòng nhập tên loại phòng!',
            'tname.min' => 'Vui lòng nhập ít nhất 6 ký tự!',
        ];
    }
}
