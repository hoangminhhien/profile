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
Route::get('/manager-calender', function () {
  return view('schedule/index');
});
Route::get('/create', function () {
    return view('create-profile.create_profile');
});
Route::get('/search', function () {
    return view('tour-guide.search');
});
Route::get('/', function () {
    return view('tour-guide.home');
});
Route::get('/profile', function () {
  return view('profile.index');
});
Route::get('/create-profile-modal', function () {
  return view('profile-modal.index');
});
Route::get('/education', function () {
  return view('profile-modal.education');
});
Route::get('/certification', function () {
  return view('profile-modal.certification');
});
Route::get('/volunteer', function () {
  return view('profile-modal.volunteer');
});
Route::get('/skill', function () {
  return view('profile-modal.skill');
});
Route::get('/history', function () {
  return view('profile-modal.history');
});
Route::post('/postEducation', 'ProfileController@postEducation')->name('profile.education');

