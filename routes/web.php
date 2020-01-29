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


Route::get('/', 'WelcomeController@index');

Auth::routes();

Route::get('/home', 'HomeController@userShop')->name('home');

Route::get('/promotion/{id}', 'PromotionController@index')->name('promotion');

Route::get('/createPromotion/{id}', 'PromotionController@input')->name('createPromotion');
