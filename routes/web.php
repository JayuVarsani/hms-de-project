<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HospitalController;

Route::get('/', [HospitalController::class, 'dashboard'])->name('dashboard');
Route::get('/patients', [HospitalController::class, 'patients'])->name('patients');
Route::get('/patients/create', [HospitalController::class, 'createPatient'])->name('patients.create');
Route::get('/doctors', [HospitalController::class, 'doctors'])->name('doctors');
Route::get('/doctors/create', [HospitalController::class, 'createDoctor'])->name('doctors.create');
Route::get('/appointments', [HospitalController::class, 'appointments'])->name('appointments');
Route::get('/appointments/create', [HospitalController::class, 'createAppointment'])->name('appointments.create');
Route::get('/login', [HospitalController::class, 'login'])->name('login');
Route::get('/register', [HospitalController::class, 'register'])->name('register');
