<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AccountRequest extends FormRequest
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
            'first_name'=>'required',
            'last_name'=>'required',
            'dob'=>'required',
            'phone'=>'required',
            'email'=>'required',
            'address'=>'required',
            'hobby'=>'required',
            'gender'=>'required',
            'state'=>'required',
            'country'=>'required'
        ];
    }

}
