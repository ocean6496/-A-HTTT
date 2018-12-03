<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RoomRequest extends FormRequest
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
            'tenphong' => 'required',
            'mota' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'tenphong.required' => 'Vui lòng nhập tên phòng!',
            'mota.required' => 'Vui lòng nhập mô tả!',
        ];
    }
}
