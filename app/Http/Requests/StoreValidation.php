<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreValidation extends FormRequest
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
            'name'=>'bail|required|between:3,100',
            'email'=>'required|unique:employees|email',
            'address'=>'required',
            'phone'=>'required',
            'mobile'=>'required',
            'gender'=>'required',
            'age'=>'required',
            'dob'=>'required',
            'status'=>'required',
            'empImg'=>'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Employee Name is required!',
            'email.required' => 'Employee Email is required!',
            'empImg.max'    =>  'Employee Image must be less than 2 MB..<br> Image type must be <strong>jpeg|png|jpg|gif|svg</strong>',    
        ];
    }
}
