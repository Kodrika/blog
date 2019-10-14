<?php

//Home
Route::get('/', 'Web\HomeController@index')->name('web.home');

//Opensearch
Route::get('opensearch.xml', 'Web\OpenSearchController@index')->name('web.opensearch');

//Sitemap
Route::get('sitemap.xml', 'Web\SitemapController@index')->name('web.sitemap');

//Tag
Route::get('tag/{tag}', 'Web\TagController@index')->name('web.tag');

Route::feeds();

//Category
Route::get('{category}', 'Web\CategoryController@index')->name('web.category');

//Article Detail
Route::get('{category}/{article}', 'Web\ArticleController@show')->name('web.category.article');
