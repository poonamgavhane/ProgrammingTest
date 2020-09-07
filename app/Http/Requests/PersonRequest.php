<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PersonRequest extends FormRequest
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
            'first_name'=>'bail | required | min:3 | ends_with:m',
            'last_name'=>'required | min:2',
            'address'=>'required | max:200 ',
            'age'=>'required | min:0 |integer',
            'date_of_birth'=>'required|date',
            'date_of_marriage'=>'required|date|after:date_of_birth',
        ];
    }
    /**
     * Get the validation messages that apply to the request.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'first_name.required'=>'Please enter first name',
            'first_name.ends_with'=>'Please enter first name ends_with m',
            'first_name.min'=>'Please enter at least 3 characters',
            'last_name.required'=>'Please enter last name',
            'larst_name.min'=>'Please enter at least 2 characters',
            'age.required'=>'Please enter age',
            'age.min'=>'Please enter positive number',
            'date_of_birth.required'=>'Please select birth date',
            'date_of_birth.date'=>'Please enter proper date format',
            'date_of_marriage.required'=>'Please select marriage date',
            'date_of_marriage.date'=>'Please select proper date format',
            'date_of_marriage.after'=>'marriage date should be greater than  the date of birth',
        ];
    }
}
