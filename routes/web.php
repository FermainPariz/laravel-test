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
    return view('welcome');
});

Route::get('/impressum', function() {
  return view('impressum');
});

Route::get('/formular', function() {
  return view('formular');
});

Route::post('/data', 'App\Http\Controllers\FormularController@formularAuswerten');
