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



// VIEWS 
Route::get('/', 'WelcomeController@show');
Route::get('/annuaire', 'UserController@show');
Route::get('/documents', 'DocumentsController@show');

//Route::get('/home', 'HomeController@index')->name('home');



// AUTH
//Auth::routes();


// ANNUAIRE
Route::post('/userCreate', 'UserController@create');
Route::put('/userUpdate', 'UserController@update');
Route::post('/userDelete', 'UserController@delete');

// WELCOME
Route::post('/newsCreate', 'WelcomeController@createNews');
Route::put('/newsUpdate', 'WelcomeController@updateNews');
Route::post('/newsDelete', 'WelcomeController@deleteNews');

//LOGIN
Route::post('/login','LoginController@authenticate');
Route::post('/logout','LoginController@logout');



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
