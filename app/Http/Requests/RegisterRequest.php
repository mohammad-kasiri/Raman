<?php

namespace App\Http\Requests;

use App\Rules\PhoneNumber;
use App\Rules\Verification;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class RegisterRequest extends FormRequest
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
            'first_name'          => ['required' , 'min:3', 'max:15', 'bail'] ,
            'last_name'           => ['required' , 'min:3', 'max:25', 'bail'] ,
            'mobile'              => ['required' , new PhoneNumber() , 'unique:users,mobile' , 'bail'] ,
            'verification_code'   => ['required' , 'min:6', new Verification(), 'bail'] ,
            'gender'              => ['required' , Rule::in(['male' , 'female']), 'bail'],
        ];
    }
}
