<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CustomerRequest extends FormRequest
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
            'firstname' => 'required|min:5',
            'lastname' => 'required|min:5',
            'idcard' => 'required|numeric',
            'phone' => 'required',
            'rid' => 'required',
            'check_in' => 'required',
            'check_out' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'firstname.required' => 'Vui lòng nhập tên!',
            'lastname.required' => 'Vui lòng nhập họ!',
            'idcard.required' => 'Vui lòng nhập chứng minh thư!',
            'idcard.numeric' => 'Vui lòng nhập số!',
            'phone.required' => 'Vui lòng nhập số điện thoại!',
            'rid.required' => 'Vui lòng nhập mã phòng!',
            'check_out.required' => 'Vui lòng nhập thời gian đến!',
            'check_out.required' => 'Vui lòng nhập thời gian trả phòng!',
        ];
    }
}
