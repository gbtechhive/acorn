<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class sponsorsController extends Controller
{
    function showSponsors() {
        return view('sponsors');
    }
}
