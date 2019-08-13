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

Route::get('/', 'siteController@home')->name('home');
Route::get('/ecosystem/motorcontroller', 'siteController@motorcontroller')->name('motorcontroller');
Route::get('/ecosystem/bms', 'siteController@bms')->name('bms');
Route::get('/ecosystem/ivec', 'siteController@ivec')->name('ivec');
Route::get('/ecosystem/services', 'siteController@services')->name('services');
Route::get('/associates', 'siteController@associates')->name('associates');
Route::get('/team', 'siteController@team')->name('team');
Route::get('/contact', 'siteController@contact')->name('contact');


