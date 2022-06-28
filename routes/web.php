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
Route::get('register', function () {
    return view('register');
});
Route::get('log-in', function () {
    return view('log-in');
});
Route::get('user', function () {
    return view('user');
});
Route::get('delete', function () {
    return view('delete');
});

