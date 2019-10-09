<?php

//Home
Route::get('/', 'Web\HomeController@index')->name('web.home');

//RSS
Route::get('rss', 'Web\HomeController@index')->name('web.rss');

//Opensearch
Route::get('opensearch.xml', 'Web\OpenSearchController@index')->name('web.opensearch');

//Category
Route::get('{category}', 'Web\CategoryController@index')->name('web.category');

//Article Detail
Route::get('{category}/{article}', 'Web\HomeController@index')->name('web.category.article');

Auth::routes();
