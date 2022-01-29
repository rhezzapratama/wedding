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

Route::get('/', 'BerandaController@index');
Route::get('/tamu', 'BerandaController@tamu');

Auth::routes(['register'=> false, 'reset'=>false]); 

Route::get('/home', 'HomeController@index')->name('home');
Route::resource('list-tamu', 'ListTamuController');
Route::post('list-tamu/update', 'ListTamuController@update')->name('list-tamu.update');
Route::get('list-tamu/destroy/{id}', 'ListTamuController@destroy');
Route::get('komentar', 'KomentarController@home');
Route::resource('item-ajax', 'KomentarController');
