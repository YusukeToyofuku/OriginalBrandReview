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

//商品投稿画面
Route::get('/posts/create', 'PostController@create');
//商品投稿処理
Route::post('/posts/store', 'PostController@store');
//商品編集画面表示処理
Route::get('/posts/{post}/edit', 'PostController@edit')->name('posts.edit');
//商品編集処理
Route::put('/posts/{post}', 'PostController@update');
//商品削除処理
Route::delete('/posts/{post}', 'PostController@delete');
//個別商品詳細＆レビュー投稿
Route::get('posts/{post}','ReviewController@show')->name('posts.show');
//商品検索処理
Route::get('/search','SearchController@search');
//ブランド別の一覧表示
Route::get('/brandnames/{brandname}','ListController@Brands');
//カテゴリー別の一覧表示
Route::get('/categories/{category}','ListController@Category');
//レビュー投稿処理
Route::post('/review/store','ReviewController@store');

//メインページ
Route::get('/', 'PostController@index');
Auth::routes();