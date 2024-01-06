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



// tes
Route::get('/', function () {
    return view('pages.home.index');
});
//test


Route::get('/login', function () {
    return view('pages.auth.login');
})->name('login');


Route::get('/register', function () {
    return view('pages.auth.register');
})->name('register');

Route::get('/reserve-exam', function () {
    return view('pages.exam.index');
})->name('reserve-exam');
