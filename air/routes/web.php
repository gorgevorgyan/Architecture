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



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/about', 'HomeController@about')->name('about');
Route::get('/contact', 'HomeController@contact')->name('contact');
Route::get('/', 'HomeController@index')->name('home');

Route::get('/test', 'userController@create')->name('test');
Route::get('/posts', 'userController@posts')->name('posts');
Route::get('/about', 'HomeController@about')->name('about');
Route::get('/chat', 'HomeController@chat')->name('chat');
Route::get('/admin', 'AdminController@index')->name('admin');
Route::get('/admin/users', 'UserController@index')->name('users');
Route::get('/admin/adminpost', 'PostController@index')->name('adminpost');
Route::get('/admin/adduser', 'AdminController@adduser')->name('adduser');
Route::get('/admin/users/create', 'UserController@create')->name('users_create');
Route::get('/admin/posts/create', 'PostController@create')->name('post_create');
Route::post('/admin/users/store', 'UserController@store')->name('users_store');
Route::post('/admin/posts/store', 'PostController@store')->name('posts_store');
Route::post('/admin/users/update', 'UserController@update')->name('users_update');
Route::post('/admin/posts/update', 'PostController@update')->name('posts_update');
Route::get('/admin/users/edit/{id}', 'UserController@edit')->name('users_edit');
Route::get('/admin/posts/edit/{id}', 'PostController@edit')->name('posts_edit');

Route::get('/admin/users/delete/{id}', 'UserController@destroy')->name('users_delete');
Route::get('/admin/posts/delete/{id}', 'PostController@destroy')->name('posts_delete');
Route::get('/post/{id}', 'PostController@show')->name('post_look');



