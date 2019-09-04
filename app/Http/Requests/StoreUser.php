<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUser extends FormRequest
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
        //TODO Validate Internationl phone Number
        return [
            'first_name'=>'required|min:4',
            'last_name'=>'required|min:4',
            'email'=>'required|email|unique:users|min:11',
            'phone_number'=>'required',
            'date_of_birth'=>'required',
            'preferred_contact_method'=>'required',
            'gender'=>'required'
        ];
    }
}
