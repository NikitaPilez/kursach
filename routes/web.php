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

Route::get('/', 'indexController@index');
Route::get('/services','indexController@services');
Route::get('/contacts','indexController@contacts');
Route::get('/gallery' ,'indexController@gallery');
Route::get('/questions' , 'indexController@questions');
Route::post('sendQuestion','indexController@sendQuestion');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
