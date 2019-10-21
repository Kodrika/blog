<?php

use Illuminate\Support\Facades\Route;

//Home
Route::get('/', 'HomeController@index')->name('admin.home');

//Profile
Route::get('profile', 'ProfileController@index')->name('admin.profile');
Route::post('profile/update', 'ProfileController@update')->name('admin.profile.update');
