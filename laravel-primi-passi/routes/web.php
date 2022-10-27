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



Route::get('/pagina_1', function () {
    return view('pagina_1');
});

Route::get('/pagina_2', function () {
    return view('pagina_2');
});

Route::get('/pagina_3', function () {
    return view('pagina_3');
});

Route::get('/pagina_4', function () {
    return view('pagina_4');
});

Route::get('/', function () {
    return view('pagina_2_titolo');
});

Route::get('/', function () {
    return view('home');
});
