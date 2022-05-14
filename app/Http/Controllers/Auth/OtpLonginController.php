<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\OtpLoginRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OtpLonginController extends Controller
{
    public function form()
    {
        return view('auth.login.otp-login');
    }

    public function login(OtpLoginRequest $request)
    {
        $user = User::query()->where('mobile' , $request->validated('mobile'))->firstOrFail();

        Auth::login($user , $request->has('remember'));

        return redirect()->route('index');
    }
}
