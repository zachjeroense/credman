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
//     return view('welcome');
// });
<<<<<<< HEAD
=======
Route::get('/', 'HomeController@index');
>>>>>>> cb6f0ec7581d1cf0b1a65fdd14e9948cd6b49754

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::resource('credentials','CredentialController')->middleware('auth');
// testroute
