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
    return view('home');
});

Route::get('/penerapan', function () {
    return view('penerapan');
});

Route::get('/fitur', function () {
    return view('fitur');
});

Route::get('/kontak', function () {
    return view('kontak');
});

Route::get('/absensi', function () {
    return view('absensi');
});
Route::get('/kunjungan', function () {
    return view('kunjungan');
});



