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

//Route::get('/', function () {
//    return view('welcome');
//});

//Route::get('/profile')
//    ->uses('PanelController@edit')
//    ->name('profile');

//Route::post('/profile')
//    ->uses('PanelController@update')
//    ->name('profile')->middleware('auth');

Auth::routes();

Route::get('/panel', 'PanelController@index')->name('panel');

Route::get('/products')
    ->uses('ProductController@index')
    ->name('product.index');

Route::get('/products/{id}')
    ->uses('ProductController@show')
    ->name('product.index');

Route::middleware('auth')
    ->prefix('/panel')
    ->group(function () {
        Route::get('/profile')
            ->uses('UserController@edit')
            ->name('profile.edit');

        Route::post('/profile')
            ->uses('UserController@update')
            ->name('profile.update');

        Route::get('/products')
            ->uses('ProductController@index')
            ->name('product.index');

        Route::get('/products/{id}/edit')
            ->uses('ProductController@edit')
            ->name('product.edit');

        Route::post('/products/{id}/update')
            ->uses('ProductController@update')
            ->name('product.update');

        Route::post('/products/{id}/delete')
            ->uses('ProductController@destroy')
            ->name('product.delete');

        Route::get('/products/create')
            ->uses('ProductController@create')
            ->name('product.create');

        Route::get('/categories')
            ->uses('CategoryController@index')
            ->name('product.index');

        Route::get('/categories/{id}/edit')
            ->uses('CategoryController@edit')
            ->name('product.edit');

        Route::post('/categories/{id}/update')
            ->uses('CategoryController@update')
            ->name('product.update');

        Route::post('/categories/{id}/delete')
            ->uses('CategoryController@destroy')
            ->name('product.delete');

        Route::get('/categories/create')
            ->uses('CategoryController@create')
            ->name('product.create');
        
    });
