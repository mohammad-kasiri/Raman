<?php

use App\Http\Controllers\Admin\CareerController;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\MaritalStatusController;
use App\Http\Controllers\Admin\PatientController;
use Illuminate\Support\Facades\Route;

Route::middleware(['auth' , 'is_admin'])->prefix('admin')->name('admin.')->group(function () {
    Route::get ('', [HomeController::class , 'index'])->name('index');
    Route::resource('patients', PatientController::class);

    Route::get ('marital/api', [MaritalStatusController::class , 'api'])->name('marital.api');
    Route::get ('career/api', [CareerController::class , 'api'])->name('career.api');

});

