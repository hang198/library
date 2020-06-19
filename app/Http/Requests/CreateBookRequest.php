<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateBookRequest extends FormRequest
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
            'name'=>'required',
            'category_id' => 'required',
            'avatar' => 'required',
            'status' => 'required',
            'desc' => 'required'
            ];
    }
    public function messages()
    {
        return [
          'name.required' => 'Tên không được để trống'  ,
            'category_id' => 'Tên thư mục không được để trống',
            'avatar' => 'ảnh đại diện không được để trống',
            'status' => 'Trạng thái không được để trống',
            'desc' => 'Mô tả không được để trống'
        ];
    }
}
