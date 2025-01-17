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

Route::post('/dashboard/{id}', 'WelcomeController@store');
Route::delete('/dashboard/{id}', 'WelcomeController@destroy');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/promotion/{id}', 'PromotionController@index')->name('promotion');
Route::get('/createPromotion/{id}', 'PromotionController@form');
Route::post('/createPromotion/{id}', 'PromotionController@store');

Route::get('/promotion/scanqr/{id}', 'PromotionController@show')->name('scanQR');
