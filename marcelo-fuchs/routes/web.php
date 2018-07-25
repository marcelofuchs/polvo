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
    return redirect()->to('home');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['prefix' => 'product', 'middleware' => 'auth'], function() {
    Route::get('/', ['as' => 'product.index', 'uses' => 'ProductsController@index']);
    Route::get('create', ['as' => 'product.create', 'uses' => 'ProductsController@create']);
    Route::post('store', ['as' => 'product.store', 'uses' => 'ProductsController@store']);
    Route::get('edit/{id}', ['as' => 'product.edit', 'uses' => 'ProductsController@edit']);
    Route::put('update/{id}', ['as' => 'product.update', 'uses' => 'ProductsController@update']);
    Route::get('destroy/{id}', ['as' => 'product.destroy', 'uses' => 'ProductsController@destroy']);
});
