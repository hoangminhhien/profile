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

Route::get('/create', function () {
    return view('profile.create_profile');
});
Route::get('/search', function () {
    return view('tour-guide.search');
});
Route::get('/', function () {
    return view('tour-guide.home');
});

