<?php

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




Route::get('/about', function () {
    return view('about');
});

Route::get('/settings', function () {
    return view('settings');
});


Route::get('/login', function () {
    return view('login');
});




Route::get('/','pagesController@beranda');
Route::get('/galeri','pagesController@galeri');
Route::get('/signin','pagesController@signin');
Route::get('/signup','pagesController@signup');
Route::get('/event','eventController@upload');
Route::post('/event/proses','eventController@upload_proses');

Auth::routes();
