<?php

namespace App\Rules;

use App\Models\Verification;
use Illuminate\Contracts\Validation\Rule;

class AvoidRepetitive implements Rule
{
    /**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function passes($attribute, $value)
    {
        if (! request()->has('mobile')) return false;

        $validCodeExists = Verification::query()->
            where('mobile' , request('mobile'))->
            where('code_expire_at' , '>' , now())->exists();

        return  !$validCodeExists;
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return __('auth.otp.messages.repetitive');
    }
}
