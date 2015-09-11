<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
// Route::get('contact','AboutController@index');
// Route::get('end','EndController@index');
Route::get('register', [ 'as' => 'register', 'uses' => 'RegisterController@index' ]);
Route::get('login', [ 'as' => 'login', 'uses' => 'LoginController@index' ]);
Route::get('/', [ 'as' => 'home', 'uses' => 'HomeController@index' ]);

// Route::get('register','UserController@register');

// Route::post('register', 'UserController@storeRegister');

// Route::resource('register','RegisterController');
// Route::resource('login','LoginController');
// Route::resource('home','HomeController');
// Route::resource('english','EnglishController');
// Route::resource('math','MathController');
// Route::resource('computer','ComputerController');
// Route::resource('aboutus','AboutusController');
// Route::resource('userprofile','UserprofileController');
