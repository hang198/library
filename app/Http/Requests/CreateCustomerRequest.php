<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateCustomerRequest extends FormRequest
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
            'codeID' => 'required',
            'class' => 'required',
            'dob' => 'required'
        ];
    }
    public function messages()
    {
        return [
            'name.required' => 'Tên không được để trống',
            'codeID.required' => 'Mã khách hàng không được để trống',
            'class.required' => 'Trường/Lớp không được để trống',
            'dob.required' => 'Ngày sinh không được để trống'
        ];
    }
}
