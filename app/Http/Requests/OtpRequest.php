<?php

namespace App\Http\Requests;

use App\Rules\AvoidRepetitive;
use App\Rules\PhoneNumber;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
use JetBrains\PhpStorm\ArrayShape;

class OtpRequest extends FormRequest
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
            'mobile' => [
                'required',
                new PhoneNumber(),
                Rule::when(request()->has('for') && request('for') == 'register', 'unique:users,mobile'),
                Rule::when(request()->has('for') && request('for') == 'login', 'exists:users,mobile'),
                new AvoidRepetitive(),
                'bail'
            ],

            'for' => [
                'required',
                Rule::in(['register', 'login']),
                'bail'
            ]

        ];
    }
}

