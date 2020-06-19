<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateUserRequest extends FormRequest
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
            'name' => 'required|max:30|min:2',
            'email' => 'required',
            'phone' => 'required|numeric',
            'password' => 'required|min:8|max:16',
            'role' => 'required'
        ];
    }
    public function messages()
    {
        return[
            'name.required' => 'Tên không được để trống!',
            'name.max' => 'Tên không hợp lệ!',
            'name.min' => 'Tên phải có ít nhất 2 ký tự trở lên!',
            'email.required' => 'Email không được để trống!',
            'phone.required' => 'Số điện thoại không được để trống!',
            'phone.numeric' => 'Số điện thoại không hợp lệ!',
            'password.required' => 'Mật khẩu không được để trống!',
            'password.max' => 'Mật khẩu có tối đa 16 ký tự!',
            'password.min' => 'Mật khẩu phải có ít nhất 8 ký tự trở lên!',
            'role.required' => 'Quyền không được để trống!',
        ];
    }
}
