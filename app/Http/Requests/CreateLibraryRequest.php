<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateLibraryRequest extends FormRequest
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
            'address' => 'required',
            'phone' => 'required',
            'avatar' => 'required|image'
        ];
    }
    public function messages()
    {
        return [
            'name.required' => 'Tên không được bỏ trống',
            'address.required' => 'Địa chỉ không được bỏ trống',
            'phone.required' => 'Số điện thoại không được bỏ trống',
            'avatar.required' => 'Ảnh không được bỏ trống',
            'avatar.image' => 'Ảnh không đúng định dạng'
        ];
    }
}
