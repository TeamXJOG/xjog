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

Route::post('/signincek','UserController@logincheck');
Route::post('/registercek','UserController@registercheck');
Route::get('/index_user','UserController@index');
Route::get('/logout','UserController@logout');

Route::get('/signup','pagesController@signup');

Route::get('/dashboard','pagesController@dashadmin');

Route::get('/editprofile','pagesController@editprofile');

Route::post('/editprof','UserController@editprof');
Route::post('/editpass','UserController@editpass');

Route::post('/hapusakun','UserController@hapusakun');
Route::get('/hapusakun2/{id}','UserController@hapusakun2');

Route::get('/event','pagesController@upload');
Route::post('/event/proses','eventController@upload_proses');
Route::get('/event/hapusevent/{id}','eventController@hapusevent');

Auth::routes();
