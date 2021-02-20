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

Route::get('/n1kkou', function () {
    return view('n1kkou');
}) ->name('home');

Route::get('/n1kkou/skills', function () {
    return view('skills');
}) ->name('skills');
