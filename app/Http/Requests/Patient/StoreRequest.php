<?php

namespace App\Http\Requests\Patient;

use App\Models\Province;
use App\Rules\PhoneNumber;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'first_name'      => ['required' , 'min:3', 'max:15', 'bail'] ,
            'last_name'       => ['required' , 'min:3', 'max:25', 'bail'] ,
            'mobile'          => ['required' , new PhoneNumber() , 'unique:users,mobile' , 'bail'] ,
            'gender'          => ['required' , Rule::in(['male' , 'female']), 'bail'],
            'email'           => ['nullable' , 'email' , 'unique:users,email' , 'bail'],
            'city_id'         => ['nullable' , 'numeric'  , 'min:'.Province::FIRST_CITY_ID , 'max:'. Province::LAST_CITY_ID],
            'address'         => ['nullable' , 'max:180'],
            'password'        => ['nullable' , 'min:4' , 'max:20' , 'confirmed'],
            'career'          => ['nullable' , 'max:30'],
            'degree'          => ['nullable' , 'max:30'],
            'study_field'     => ['nullable' , 'max:30'],
            'marital_status'  => ['nullable' , 'max:30'],
            'birthdate'       => ['nullable' , 'min:10' , 'max:10'],
            'avatar'          => ['nullable' , 'image'  , 'max:2048']
        ];
    }
}
