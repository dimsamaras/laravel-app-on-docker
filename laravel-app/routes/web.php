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
    return view('welcome');
});

Auth::routes();

Route::get('/timeline', 'TimelineController@index')->name('timeline');
Route::get('/postatweet', 'PostatweetController@index')->name('postatweet');
Route::get('/profile/{user}', 'ProfileController@show')->name('profile');
Route::get('/users', 'UsersController@index')->name('users');
