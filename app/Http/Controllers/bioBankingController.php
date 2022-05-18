<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class bioBankingController extends Controller
{
    function showBioBanking() {
        return view('bioBanking');
    }
}
