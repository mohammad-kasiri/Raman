<?php

use App\Http\Controllers\Admin\CareerController;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\MaritalStatusController;
use App\Http\Controllers\Admin\PatientController;
use Illuminate\Support\Facades\Route;

Route::middleware(['auth' , 'is_admin'])->prefix('admin')->name('admin.')->group(function () {
    Route::get ('', [HomeController::class , 'index'])->name('index');

    Route::get('patients'                , [PatientController::class , 'index'])   ->name('patients.index')    ->can('patients.index');
    Route::get('patients/create'         , [PatientController::class , 'create'])  ->name('patients.create')   ->can('patients.create');
    Route::post('patients'               , [PatientController::class , 'store'])   ->name('patients.store')    ->can('patients.create');
    Route::get('patients/{patient}'      , [PatientController::class , 'show'])    ->name('patients.show')     ->can('patients.show');
    Route::get('patients/{patient}/edit' , [PatientController::class , 'edit'])    ->name('patients.edit')     ->can('patients.edit');
    Route::patch('patients/{patient}'    , [PatientController::class , 'update'])  ->name('patients.update')   ->can('patients.edit');


    Route::get ('marital/api', [MaritalStatusController::class , 'api'])->name('marital.api');
    Route::get ('career/api', [CareerController::class , 'api'])->name('career.api');

});

