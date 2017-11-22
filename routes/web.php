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

Route::get('/' , 'UsersController@index');
Route::get('/tambah' , 'UsersController@tambah');
Route::post('/tambah/{post}' , 'UsersController@post');
Route::get('/ubah/{id}' , 'UsersController@ubah');
Route::put('/ubah/{id}/update' , 'UsersController@update');
Route::get('/hapus/{id}' , 'UsersController@hapus');