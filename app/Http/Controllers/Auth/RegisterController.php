<?php

namespace App\Http\Controllers\Auth;

use App\Events\NewUserRegisteredEvent;
use App\Http\Controllers\Controller;
use App\Http\Requests\RegisterRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RegisterController extends Controller
{
    public function form()
    {
        return view('auth.register.register');
    }

    public function register(RegisterRequest $request)
    {
        $user = User::query()->create([
            'first_name' => $request->validated('first_name'),
            'last_name'  => $request->validated('last_name'),
            'mobile'     => $request->validated('mobile'),
            'gender'     => $request->validated('gender'),
        ]);

        event(new NewUserRegisteredEvent($user));

        Auth::login($user,  $request->has('remember'));

        return redirect()->route('index');
    }
}
