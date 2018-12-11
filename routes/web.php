<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('custom-register', 'CustomAuthController@ShowRegisterForm')->name('custom-register');
Route::post('custom-register', 'CustomAuthController@register');
Route::get('custom-login', 'CustomAuthController@ShowLoginForm')->name('custom-login');
Route::post('custom-login', 'CustomAuthController@login');

Route::get('/verify/{token}','VerifyController@verify')->name('verify');
