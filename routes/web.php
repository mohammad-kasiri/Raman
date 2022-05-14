<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\OtpController;
use App\Http\Controllers\Auth\OtpLonginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Guest\HomeController;
use Illuminate\Support\Facades\Route;

Route::get ('', [HomeController::class , 'index'])->name('index');

Route::middleware(['guest'])->group(function (){
    Route::get ('login', [LoginController::class , 'form'])->name('login.form');
    Route::post('login', [LoginController::class , 'login'])->name('login.submit')->middleware('throttle:auth_attempt');

    Route::get ('otp-login', [OtpLonginController::class , 'form'])->name('otp-login.form');
    Route::post('otp-login', [OtpLonginController::class , 'login'])->name('otp-login.submit')->middleware('throttle:auth_attempt');

    Route::get ('register', [RegisterController::class , 'form'])->name('register.form');
    Route::post('register', [RegisterController::class , 'register'])->name('register.submit')->middleware('throttle:auth_attempt');

    Route::post ('otp', [OtpController::class , 'store'])->name('otp.store')->middleware('throttle:auth_attempt');;
});
