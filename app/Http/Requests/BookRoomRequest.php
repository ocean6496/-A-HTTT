<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BookRoomRequest extends FormRequest
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
            'lastname' => 'required',
            'idcard' => 'required',
            'phone' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'firstname.required' => 'Please input firstname', 
            'lastname.required' => 'Please input lastname', 
            'idcard.required' => 'Please input idcard', 
            'phone.required' => 'Please input phone', 
        ];
    }
}
