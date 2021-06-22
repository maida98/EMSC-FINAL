<?php

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
    return view('index');
});

Route::get('/citizenHome', function () {
    return view('citizenHome');
});

Route::get('/rigesterFIR', function () {
    return view('rigesterFIR');
});

Route::get('/rigesterCyberCrime', function () {
    return view('rigesterCyberCrime');
});
Route::get('/rigesterAppointment', function () {
    return view('rigesterAppointment');
});


