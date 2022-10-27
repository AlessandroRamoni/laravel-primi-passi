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

Route::get('/hola', function () {
    return view('hola');
});

Route::get('/defqon', function () {
    return view('defqon');
});

Route::get('/', function () {
    return view('home');
});

Route::get('/title_defqon', function () {
    return view('title_defqon');
});
