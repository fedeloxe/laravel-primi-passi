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
})->name('home');

Route::get('/pippo', function () {
    return view('pippo');
})->name('pippo');

Route::get('/pluto', function () {
    return view('pluto');
})->name('pluto');

Route::get('/paperino', function () {
    return view('paperino');
})->name('paperino');
