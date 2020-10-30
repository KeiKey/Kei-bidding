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

Route::get('/profile')
    ->uses('CPController@edit')
    ->name('profile');

Route::post('/profile')
    ->uses('CPController@update')
    ->name('profile');

Auth::routes();

Route::get('/panel', 'CPController@index')->name('panel');

Route::get('/products')
    ->uses('ProductController@index')
    ->name('');

Route::get('/product')
    ->uses('ProductController@create')
    ->name('');

Route::get('/product/{id}')
    ->uses('ProductController@edit')
    ->name('');

Route::post('/product/{id}')
    ->uses('ProductController@update')
    ->name('');

Route::get('/categories')
    ->uses('ProductController@index')
    ->name('');

Route::get('/category')
    ->uses('ProductController@create')
    ->name('');

Route::get('/category/{id}')
    ->uses('ProductController@update')
    ->name('');








//Route::middleware('auth')
//    ->group(function () {
//        Route::get('/profile')
//            ->uses('CPController@edit')
//            ->name('profile');
//
//        Route::post('/profile')
//            ->uses('CPController@update')
//            ->name('profile');
//    });
