<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\aboutUsController;
use App\Http\Controllers\patientsController;
use App\Http\Controllers\physiciansController;
use App\Http\Controllers\sponsorsController;
use App\Http\Controllers\contactusController;
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
    return view('home');
});
Route::get('/aboutus', [aboutUsController::class, 'showAboutUS']);
Route::get('/patients', [patientsController::class, 'showPatients']);
Route::get('/physicians', [physiciansController::class, 'showPhysicians']);
Route::get('/sponsors', [sponsorsController::class, 'showSponsors']);
Route::get('/contactus', [contactusController::class, 'showContactus']);