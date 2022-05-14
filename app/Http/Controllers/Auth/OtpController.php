<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\OtpRequest;
use App\Models\Verification;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class OtpController extends Controller
{
    public function store(OtpRequest $requset)
    {
        $code = Verification::makeCode();

        Verification::query()->create([
            'mobile'         => $requset->validated('mobile'),
            'code'           => $code,
            'code_expire_at' => Carbon::now()->addMinutes(Verification::CODE_VALID_FOR),
        ]);

        return response()->json([
            'verification_code' => __('auth.otp.messages.successful')
        ] , 201);
    }
}
