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
Route::get('/services','IndexController@services');
Route::get('/contacts','IndexController@contacts');
Route::get('/questions' , 'IndexController@questions');
Route::get('/aboutus','IndexController@aboutus');
Route::post('sendQuestion','IndexController@sendQuestion');
Route::post('sendOrder','IndexController@sendOrder');
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');


/*

1. На главной должна быть только заставка
2. Сделать в меню вкладку о нас и туда перенести точто было на главной
3. сделать модальное окно с заказать услугу и отправку его  ( название услуги , цена ,)
4. контакты сделаю я
*/
