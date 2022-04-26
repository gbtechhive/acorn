<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class physiciansController extends Controller
{
    function showPhysicians() {
        return view('physicians');
    }
}
