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
/*
Route::get('/', function () {
    return view('welcome');
});*/

//Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();
Route::get('/', 'PostsController@index');
Route::post('favorite/{post}', 'PostsController@favoritePost');
Route::post('unfavorite/{post}', 'PostsController@unFavoritePost');
Route::post('increase_tst_cnt/{post}', 'TestCountController@increase')->middleware('auth');
Route::post('increasing_tst_cnt/{post}', 'TestCountController@increasing')->middleware('auth');
Route::get('my_favorites', 'UsersController@myFavorites')->middleware('auth');

Route::get('/home', 'HomeController@index')->name('home');
