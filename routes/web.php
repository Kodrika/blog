<?php

//Home
Route::get('/', 'Web\HomeController@index')->name('web.home');

//RSS
Route::get('rss', 'Web\HomeController@index')->name('web.rss');

Auth::routes();
