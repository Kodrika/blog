<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

//Auth
Auth::routes([
    'register' => false,
    'reset' => false,
    'confirm' => false,
    'verify' => false,
]);

//2FA
Route::get('2fa', 'Auth\RegisterController@index')->name('admin.2fa');
Route::post('2fa-post', function () {
    return redirect(URL()->previous());
})->name('admin.2fa.post')->middleware('2fa');
