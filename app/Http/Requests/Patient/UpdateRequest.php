<?php

namespace App\Http\Requests\Patient;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateRequest extends FormRequest
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
        $user_id = $this->route()->parameter('patient');

        return [
            'first_name'      => ['required' , 'min:3', 'max:15', 'bail'] ,
            'last_name'       => ['required' , 'min:3', 'max:25', 'bail'] ,
            'gender'          => ['required' , Rule::in(['male' , 'female']), 'bail'],
            'email'           => ['nullable' , 'email' , 'bail' , Rule::unique('users', 'email')->ignore($user_id),],
            'city_id'         => ['nullable' , 'numeric'  , 'min:32' , 'max:458'],
            'address'         => ['nullable' , 'max:180'],
            'career'          => ['nullable' , 'max:30'],
            'marital_status'  => ['nullable' , 'max:30'],
            'degree'          => ['nullable' , 'max:30'],
            'study_field'     => ['nullable' , 'max:30'],
            'birthdate'       => ['nullable' , 'min:10' , 'max:10'],
            'avatar'          => ['nullable' , 'image'  , 'max:2048']
        ];
    }
}
