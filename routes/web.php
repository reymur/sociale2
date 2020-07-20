<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

Route::get('/', 'HomeController@index')->name('home');

Route::get('/register', 'RegistrationController@show')->middleware('guest')->name('register.show');
Route::post('/register', 'RegistrationController@registr')->middleware('guest')->name('register.post');

Route::get('/login', 'LoginController@show')->middleware('guest')->name('login.show');
Route::post('/login', 'LoginController@loginAuthorize')->middleware('guest')->name('login.post');
Route::get('/logout', 'LoginController@logout')->name('logout');

Route::get('/search', 'SearchController@index')->middleware('auth')->name('search');

Route::get('/user/{id}', 'ProfilController@index')->middleware('auth')->name('profile');

Route::resource('/user-profile', 'UserProfileController');

// Friends index page
Route::get('/friends', 'FriendsController@index')->middleware('auth')->name('friends');
