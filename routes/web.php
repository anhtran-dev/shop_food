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

Route::get('/','IndexController@index');
Route::get('contact','IndexController@contact')->name('contact');
Route::get('about','IndexController@about')->name('about');

// Product
Route::group(['prefix'=>'product'],function(){
    Route::get('/','IndexController@allProduct')->name('product.all');
    Route::get('/category/{id}','IndexController@productByCategory')->name('category.product');
});
// Blog
Route::group(['prefix'=>'blog'],function(){
    Route::get('/','IndexController@blog')->name('blog');
});

// User
Route::get('login','IndexController@login')->name('login');
Route::get('register','IndexController@register')->name('register');
Route::get('my-account','IndexController@myAccount')->name('my_account');

