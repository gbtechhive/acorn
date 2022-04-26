<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class patientsController extends Controller
{
    function showPatients() {
        return view('patients');
    }
}
