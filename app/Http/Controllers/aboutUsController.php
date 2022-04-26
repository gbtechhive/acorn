<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class aboutUsController extends Controller
{
    //
    function showAboutUS() 
    {
        return view('aboutus');
    }
}
