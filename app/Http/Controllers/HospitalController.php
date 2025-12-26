<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HospitalController extends Controller
{
    public function dashboard()
    {
        return view('dashboard');
    }

    public function patients()
    {
        return view('patients');
    }

    public function createPatient()
    {
        return view('patient-register');
    }

    public function doctors()
    {
        return view('doctors');
    }

    public function createDoctor()
    {
        return view('doctor-register');
    }

    public function appointments()
    {
        return view('appointments');
    }

    public function createAppointment()
    {
        return view('appointment-create');
    }

    
    public function login()
    {
        return view('login');
    }

    public function register()
    {
        return view('register');
    }
}
