<?php

namespace App\Observers;


use App\Facades\SMS;
use App\Models\Verification;

class VerificationObserver
{
    /**
     * Handle the Verification "created" event.
     *
     * @param  \App\Models\Verification  $verification
     * @return void
     */
    public function created(Verification $verification)
    {
        //SMS::tokens(["token" => $verification->code])->sendLookUp($verification->mobile);
    }
}
