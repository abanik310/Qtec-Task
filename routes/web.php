<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\UrlController;



Route::get('/login', ['as' => 'login', 'uses' => '\App\Http\Controllers\UserController@login']);
Route::post('/check_login', ['as' => 'check_login', 'uses' => '\App\Http\Controllers\UserController@check_login']);

Route::get('/register', ['as' => 'register', 'uses' => '\App\Http\Controllers\UserController@register']);
Route::post('/register_user', ['as' => 'register_user', 'uses' => '\App\Http\Controllers\UserController@register_user']);


Route::group(['middleware' => 'auth'], function () {
    Route::get('/dashboard', ['as' => 'dashboard', 'uses' => '\App\Http\Controllers\UserController@dashboard']);
    Route::get('/urls', [UrlController::class, 'index'])->name('urls.index');
    Route::get('/urls/create', [UrlController::class, 'create'])->name('urls.create');
    Route::post('/urls', [UrlController::class, 'store'])->name('urls.store');
});




