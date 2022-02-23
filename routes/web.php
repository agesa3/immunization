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
    return view('immunization/create');
});

//immunization route
Route::resource('immunization', 'App\Http\Controllers\ImmunizationController');
//post
// Route::post('immunization', 'App\Http\Controllers\ImmunizationController@store');
