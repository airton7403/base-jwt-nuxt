<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::group(['prefix' => '/auth', ['middleware' => 'throtlle:20,5']], function () {
  Route::post('/register', 'Auth\RegisterController@register')->name('register');
  Route::post('/login', 'Auth\LoginController@login')->name('login');
});

Route::group(['middleware' => 'jwt.auth'], function () {
  Route::get('/me', 'MeController@index')->name('me');
  Route::get('/auth/logout', 'MeController@logout')->name('logout');
});
