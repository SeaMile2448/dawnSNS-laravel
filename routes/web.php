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

// Route::get('/', function () {
//     return view('welcome');
// });
// Route::get('/home', 'HomeController@index')->name('home');

//Auth::routes();

Route::resource('/articles','PostsController')->except(['index', 'edit', 'show']);

//ログアウト中のページ
Route::get('/login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('/login', 'Auth\LoginController@login');

Route::get('/register', 'Auth\RegisterController@registerForm')->name('register');
Route::post('/register', 'Auth\RegisterController@register');

Route::get('/added', 'Auth\RegisterController@added');


//ログイン中のページ
Route::get('/top','PostsController@index')->name('top');

Route::get('/profile','UsersController@profile')->name('profile');

Route::get('/search','UsersController@search')->name('search');
Route::post('/search','UsersController@search');

Route::get('/follow-list','PostsController@index')->name('followList');
Route::get('/follower-list','PostsController@index')->name('followerList');
Route::post('/post/{id}/update','PostsController@update');

Route::post('/logout','Auth\LoginController@logout')->name('logout');
