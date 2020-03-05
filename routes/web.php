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

Route::get('suratlamaran/mail','MailController@home');
Route::post('send/email','MailController@sendmail');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
