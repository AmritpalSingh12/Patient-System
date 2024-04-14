<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('Home.index');
});

Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::group([
    'middleware' => ['auth:web','admin']
], function () {

    Route::get('/dashboard',[\App\Http\Controllers\HomeController::class,'index'])->name('dashboard');
    Route::get('/patients/appointment',[\App\Http\Controllers\AdminController::class,'appointment_index'])->name('appointment');
    Route::get('/patients',[\App\Http\Controllers\AdminController::class,'patient_index'])->name('patient');
    Route::get('/patient/create',[\App\Http\Controllers\AdminController::class,'patient_create'])->name('patient_create');
    Route::post('/patient/create',[\App\Http\Controllers\AdminController::class,'patient_store'])->name('patient_store');
    Route::get('/delete/{id}/patient',[\App\Http\Controllers\AdminController::class,'delete_patient'])->name('delete_patient');
    Route::get('/edit/{id}/patient',[\App\Http\Controllers\AdminController::class,'edit_patient'])->name('edit_patient');
    Route::post('/update/{id}/patient',[\App\Http\Controllers\AdminController::class,'update_patient'])->name('update_patient');
    Route::post('/search/patient',[\App\Http\Controllers\AdminController::class,'search_patient'])->name('search_patient');
    Route::get('/doctors', [\App\Http\Controllers\AdminController::class,'doctor_index'])->name('doctor');
    Route::get('/delete/{id}/doctor',[\App\Http\Controllers\AdminController::class,'delete_doctor'])->name('delete_doctor');
    Route::get('/delete/{id}/edit',[\App\Http\Controllers\AdminController::class,'edit_doctor'])->name('edit_doctor');
    Route::post('/delete/{id}/update',[\App\Http\Controllers\AdminController::class,'update_doctor'])->name('update_doctor');
    Route::post('/search/doctor',[\App\Http\Controllers\AdminController::class,'search_doctor'])->name('search_doctor');
    Route::get('/doctor/create',[\App\Http\Controllers\AdminController::class,'doctor_create'])->name('doctor_create');
    Route::post('/doctor/create',[\App\Http\Controllers\AdminController::class,'doctor_store'])->name('doctor_store');


});

Route::group([
    'middleware' => ['auth:web','user']
], function () {

    Route::get('/user/dashboard',[\App\Http\Controllers\PatientController::class,'dashboard'])->name('user_dashboard');
    Route::get('/profile/edit',[\App\Http\Controllers\PatientController::class,'edit_profile'])->name('edit_profile');
    Route::post('/profile/update',[\App\Http\Controllers\PatientController::class,'update_profile'])->name('update_profile');
    Route::get('/booking',[\App\Http\Controllers\PatientController::class,'booking'])->name('booking');
    Route::post('/booking',[\App\Http\Controllers\PatientController::class,'booking_store'])->name('booking_store');
    Route::get('/appointments',[\App\Http\Controllers\PatientController::class,'list_appointment'])->name('list_appointment');
    Route::get('/booking/{id}/deleted',[\App\Http\Controllers\PatientController::class,'booking_delete'])->name('booking_delete');
    Route::get('/my-prescription',[\App\Http\Controllers\PatientController::class,'list_prescription'])->name('list_prescription');
});


Route::group([
    'middleware' => ['auth:web','doctor']
], function () {

    Route::get('/doctor/dashboard',[\App\Http\Controllers\DoctorController::class,'dashboard'])->name('doctor_dashboard');
    Route::get('/doctor/appointment',[\App\Http\Controllers\DoctorController::class,'doctor_appointment'])->name('doctor_appointment');
    Route::get('/doctor/prescription/create',[\App\Http\Controllers\DoctorController::class,'prescription_create'])->name('prescription_create');
    Route::post('/doctor/prescription/create',[\App\Http\Controllers\DoctorController::class,'prescription_store'])->name('prescription_store');

});


