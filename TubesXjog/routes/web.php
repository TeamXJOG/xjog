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

// Route::get('/', function () {
//     return view('beranda');
// });

Route::get('/','pagesController@beranda');
Route::get('/galeri','pagesController@galeri');
Route::get('/signin','pagesController@signin');
Route::get('/signup','pagesController@signup');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/index_user','UserController@index');
Route::get('/signout','UserController@logout');
Route::post('/signincek','UserController@logincheck');
Route::post('/registercek','UserController@registercheck');