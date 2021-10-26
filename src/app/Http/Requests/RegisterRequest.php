<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
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
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6|required_with:repassword|same:repassword',
            'repassword' => 'required|min:6'
        ];
    }
    public function messages()
    {
        return[
            'name.required' => 'Tên không được để trống',
            'email.required'=> 'Email không được để trống',
            'password.required'=>'Mật khẩu không được để trống',
            'repassword.required'=>'Vui lòng nhập lại mật khẩu',
        ];
    }
}
