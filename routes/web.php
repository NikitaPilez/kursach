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

Route::get('/', 'IndexController@index');
//Route::get('/base', 'IndexController@index');
Route::get('/contacts','IndexController@contacts');
Route::get('/gallery' ,'IndexController@gallery');
Route::get('/questions' , 'IndexController@questions');
Route::post('sendQuestion','IndexController@sendQuestion');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

/*

https://laravel.ru/docs/v5/queries

	id = 1; only fisrt entry; 
 	a)Edit 
 	
 	email,phone,address,
 	header,title,subtitle,copyright.
*/
