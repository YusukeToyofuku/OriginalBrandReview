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


Route::get('/home', 'HomeController@index')->name('home');

Route::get('posts/review','PostController@review');

Route::get('/posts/create', 'PostController@create');

Route::get('/posts/topvalue', 'PostController@topvalue');

Route::get('posts/product', 'PostController@main');

Route::get('posts/list', 'PostController@list');

Route::post('/posts', 'PostController@store');

Route::get('/search','SearchController@search');

Route::get('/brandname/{brandname}','BrandnameController@Brands');


Route::get('/', 'PostController@index');
Auth::routes();