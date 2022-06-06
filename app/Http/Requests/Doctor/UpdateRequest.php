<?php

namespace App\Http\Requests\Doctor;

use App\Rules\PhoneNumber;
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
        $user_id = $this->route()->parameter('doctor');
        return [
            'first_name'                =>      ['required' , 'min:3', 'max:15', 'bail'] ,
            'last_name'                 =>      ['required' , 'min:3', 'max:25', 'bail'] ,
            'gender'                    =>      ['required' , Rule::in(['male' , 'female']), 'bail'],
            'email'                     =>      ['nullable' , 'email' , Rule::unique('users', 'email')->ignore($user_id) , 'bail'],
            'bio'                       =>      ['nullable' , 'string', 'max:2000'],
            'subjects'                  =>      ['nullable' , 'array'],
            'subjects.*'                =>      ['required' , 'numeric'],
            'socialMedia'               =>      ['nullable' , 'array'],
            'socialMedia.*'             =>      ['nullable' , 'url'],
            'is_visible'                =>      ['required' , 'in:0,1'],
            'price_per_minute'          =>      ['nullable' , 'numeric'],
            'educational_background'    =>      ['nullable' , 'string' , 'max:600'],
            'working_background'        =>      ['nullable' , 'string' , 'max:600'],
            'first_day_of_work'         =>      ['nullable' , 'min:10' , 'max:10'],
            'avatar'                    =>      ['nullable' , 'image' , 'max:2048']
        ];
    }
}
