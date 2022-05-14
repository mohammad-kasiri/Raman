<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;


class Verification implements Rule
{
    private string $message;

    private string|null $mobile;
    private string|null $code;
    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public function __construct(){
        $this->mobile = request()->has('mobile') ?  request('mobile') : '';
        $this->code   =  request()->has('verification_code') ?   request('verification_code') : '';
    }

    /**
     * Determine if the validation rule passes.
     *
     * @param string $attribute
     * @param mixed $value
     * @return bool
     */
    public function passes($attribute, $value)
    {
        $verification = \App\Models\Verification::query()
            ->where('mobile', $this->mobile)
            ->latest()->first();

        // Checking We Have A Valid Code In DataBase
        if (! $verification) {
            $this->message = __('auth.otp.messages.ask_to_send');
            return false;
        }

        //Check Entered Code And Stored Code Are The Same
        if ($verification->code != $this->code) {
            $this->message = __('auth.otp.messages.code_wrong');
            return false;
        }

        //Check Code Expiration
        if ($verification->code_expire_at < now()) {
            $this->message = __('auth.otp.messages.code_expired');
            return false;
        }

        return true;
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return $this->message;
    }
}
