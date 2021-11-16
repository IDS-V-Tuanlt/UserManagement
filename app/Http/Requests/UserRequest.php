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
            'name' => 'required|min:2|max:25',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:8|regex:/^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-]).{6,}$/'
        ];
    }
    public function messages()
    {
        return [
            'name.required' => 'Tên không được để trống',
            'name.min' => 'Tên phải có ít nhất 2 ký tự',
            'name.max' => 'Tên chỉ được nhiều nhất 25 ký tự',
            'email.required' => 'Email không được để trống',
            'email.email' => 'Định dạng địa chỉ email không đúng',
            'email.unique' => 'Email này đã đăng ký',
            'password.required' => 'Mật khẩu không được để trống',
            'password.min' => 'Mật khẩu phải có ít nhất 8 ký tự',
            'password.regex' => 'Mật khẩu phải có chữ hoa, chữ thường, chữ số và ký tự đặt biệt'

        ];
    }
}
