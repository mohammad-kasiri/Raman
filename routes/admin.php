<?php

use App\Http\Controllers\Admin\CareerController;
use App\Http\Controllers\Admin\DegreeController;
use App\Http\Controllers\Admin\DoctorController;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\MaritalStatusController;
use App\Http\Controllers\Admin\PatientController;
use App\Http\Controllers\Admin\PatientSessionController;
use App\Http\Controllers\Admin\StudyFieldController;
use Illuminate\Support\Facades\Route;

Route::middleware(['auth' , 'is_admin'])->prefix('admin')->name('admin.')->group(function () {
    Route::get ('', [HomeController::class , 'index'])->name('index');

    Route::get('patients/{patient}/sessions'   , [PatientSessionController::class , 'index'])  ->name('patients.session.index')    ->can('patients.session.index');

    Route::get('patients'                      , [PatientController::class , 'index'])         ->name('patients.index')            ->can('patients.index');
    Route::get('patients/create'               , [PatientController::class , 'create'])        ->name('patients.create')           ->can('patients.create');
    Route::post('patients'                     , [PatientController::class , 'store'])         ->name('patients.store')            ->can('patients.create');
    Route::get('patients/{patient}'            , [PatientController::class , 'show'])          ->name('patients.show')             ->can('patients.show');
    Route::get('patients/{patient}/edit'       , [PatientController::class , 'edit'])          ->name('patients.edit')             ->can('patients.edit');
    Route::patch('patients/{patient}'          , [PatientController::class , 'update'])        ->name('patients.update')           ->can('patients.edit');

    Route::get('doctors'                       , [DoctorController::class , 'index'])          ->name('doctors.index')   ;//  ->can('doctors.index');
    Route::get('doctors/create'                , [DoctorController::class , 'create'])         ->name('doctors.create')  ;//  ->can('doctors.create');
    Route::post('doctors'                      , [DoctorController::class , 'store'])          ->name('doctors.store')   ;//  ->can('doctors.create');
    Route::get('doctors/{doctor}'              , [DoctorController::class , 'show'])           ->name('doctors.show')    ;//  ->can('doctors.show');
    Route::get('doctors/{doctor}/edit'         , [DoctorController::class , 'edit'])           ->name('doctors.edit')    ;//  ->can('doctors.edit');
    Route::patch('doctors/{doctor}'            , [DoctorController::class , 'update'])         ->name('doctors.update')  ;//  ->can('doctors.edit');


    Route::get ('marital/api', [MaritalStatusController::class , 'api'])->name('marital.api');
    Route::get ('career/api', [CareerController::class , 'api'])->name('career.api');
    Route::get ('degree/api', [DegreeController::class , 'api'])->name('degree.api');
    Route::get ('study_fields/api', [StudyFieldController::class , 'api'])->name('study-field.api');
});

