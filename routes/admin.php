<?php
use Illuminate\Support\Facades\Route;

//Home
Route::get('/', 'Admin\HomeController@index')->name('admin.home');
