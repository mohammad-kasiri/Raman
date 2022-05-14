<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LoginRequest extends FormRequest
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

    public function rules()
    {
        return [
            'username' => ['required' , 'min:9', 'max:60' , 'bail'] ,
            'password' => ['required' , 'min:6', 'max:60'] ,
            'tz'       => ['nullable'] ,
        ];
    }

    public function attributes()
    {
        return [
            'username' => 'ایمیل یا شماره تلفن'
        ];
    }
}
