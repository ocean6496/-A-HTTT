<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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
            'username' => 'required|unique:users',
            'password' => 'required|min:6',
            'fullname' => 'required|min:6',
        ];
    }

    public function messages()
    {
        return [
            'username.required' => 'Vui lòng nhập tên tài khoản!',
            'username.unique' => 'Username đã tồn tại.Vui lòng nhập tên tài khoản khác!',
            'password.required' => 'Vui lòng nhập mật khẩu!',
            'password.min' => 'Vui lòng nhập mật khẩu có ít nhất 6 ký tự!',
            'fullname.required' => 'Vui lòng nhập họ tên!',
            'fullname.min' => 'Vui lòng nhập họ tên có ít nhất 6 ký tự!',
        ];
    }
}
