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

//This route will be referring to the home page and will be changed before finishing 
Route::get('/','PagesController@index');

Route::get('/about', 'PagesController@about');
Route::resource('createdevents','CreatedEventsController');

Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::delete('user','UserNumberController@deleteuseraccount');