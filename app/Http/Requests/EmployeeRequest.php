<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EmployeeRequest extends FormRequest
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
            'first_name'=>'required|min:2',
            'last_name'=>'required|min:2',
        ];
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'first_name.required'=>'Please enter first name',
            'last_name.required'=>'Please enter last name',
            'first_name.min'=>'Please enter minimum 2 characters',
            'last_name.min'=>'Please enter minimum 2 characters',
        ];
    }
}
