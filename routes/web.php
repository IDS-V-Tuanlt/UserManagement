<?php

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


Route::group(['prefix' => 'user'], function(){
    Route::get('/', 'UserController@index');
    Route::get('/create','UserController@getcreate')->name('create.getform');
    Route::post('/create', 'UserController@create')->name('create.user');
    Route::get('/edit/{id}', 'UserController@read')->name('edit.user');
    Route::put('/edit/{id}', 'UserController@update')->name('update.user');
    Route::delete('/delete/{id}', 'UserController@delete')->name('destroy.user');
});

Route::post('/search', 'UserController@search')->name('search.user');
try{
    Route::group(['prefix' => 'products'], function(){
        Route::get('/', 'ProductController@index');
        Route::get('/product/{id}', 'ProductController@show')->name('show.product');
        Route::get('/product/order/{id}', 'ProductController@order')->name('order.product');
    });
    Route::post('/order/checkout', 'OrderController@checkout')->name('checkout');
}  catch (Exception $e){
    abort(404);
}
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
