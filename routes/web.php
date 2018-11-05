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

Route::get('/', function () { return view('welcome'); });
Route::get('/countries/users', 'CountryController@showUsers');
Route::get('/countries/articles', 'CountryController@showArticles');
Route::resource('countries', 'CountryController');
Route::get('/users/address', 'UserController@showAddress');
Route::get('/users/roles', 'UserController@showRoles');
Route::get('/users/comments', 'UserController@showComments');
Route::resource('users', 'UserController');
Route::resource('addresses', 'AddressController');
Route::get('/articles/user', 'ArticleController@showUser');
Route::get('/articles/comments', 'ArticleController@showComments');
Route::resource('articles', 'ArticleController');
Route::resource('comments', 'CommentController');
Route::resource('roles', 'RoleController');