<?php

namespace App\Http\Requests;

use App\Rules\PhoneNumber;
use App\Rules\Verification;
use Illuminate\Foundation\Http\FormRequest;

class OtpLoginRequest extends FormRequest
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
            'mobile'              => ['required' , new PhoneNumber() , 'exists:users,mobile' , 'bail'] ,
            'verification_code'   => ['required' , 'min:6', new Verification(), 'bail'] ,
        ];
    }
}
