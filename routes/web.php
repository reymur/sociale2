<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

Route::get('/', 'HomeController@index')->name('home');

Route::get('/register', 'RegistrationController@show')->name('register.show');
Route::post('/register', 'RegistrationController@registr')->name('register.post');

Route::get('/login', 'LoginController@show')->name('login.show');
Route::post('/login', 'LoginController@loginAuthorize')->name('login.post');
