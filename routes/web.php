<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

//Route::get('/profile', function () {
//    return view('CP.profile');
//});
//
//Route::post('/change', 'CPController@changePass')->name('changePwd');

Route::get('/profile')
    ->uses('CPController@edit')
    ->name('profile');

Route::post('/profile')
    ->uses('CPController@update')
    ->name('profile');

Auth::routes();

Route::get('/panel', 'CPController@index')->name('panel');


//Route::post('/change', function () {
//    return view('auth.passwords.change');
//});
//Route::post('/changePassword','ChangePasswordController@index')->name('changePassword');
