<?php

//Home
Route::get('/', 'Web\HomeController@index')->name('web.home');

//RSS
Route::get('rss', 'Web\HomeController@index')->name('web.rss');

//Category
Route::get('{category}', 'Web\HomeController@index')->name('web.category');

//Article Detail
Route::get('{category}/{article}', 'Web\HomeController@index')->name('web.category.article');

Auth::routes();
