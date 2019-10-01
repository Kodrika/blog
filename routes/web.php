<?php

//Home
Route::get('/', 'Web\HomeController@index')->name('web.home');

Auth::routes();
