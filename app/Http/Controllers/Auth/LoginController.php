<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Testing\Fluent\Concerns\Has;
use Illuminate\Validation\UnauthorizedException;
use Illuminate\Validation\ValidationException;

class LoginController extends Controller
{
    public function form()
    {
        return view('auth.login.login');
    }

    public function login(LoginRequest $request)
    {
        $user = User::query()->where('mobile', $request->username)
            ->orWhere('email', $request->username)->first();


        if (!$user or !Hash::check($request->password, $user->password)) {
            throw ValidationException::withMessages([
                'password' => __('auth.login.messages.failed')
            ]);
        }

        Auth::login($user,  $request->has('remember'));

        return redirect()->route('index');
    }
}
