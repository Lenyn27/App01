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

Route::get('/cusco', function () {
    return view('cusco');
});

Route::get('/huanuco', function () {
    return view('huanuco');
});

Route::get('/tacna', function () {
    return view('tacna');
});

Route::get('/navegador', function () {
    return view('navegador');
});

Route::get('/arequipa', function () {
    return view('arequipa');
});

