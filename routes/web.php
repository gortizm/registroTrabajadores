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

Route::get('/', 'finalController@index');

Route::resource('final', 'finalController');

Route::get('/final/edit/{id}', 'finalController@edit')->name("editar");