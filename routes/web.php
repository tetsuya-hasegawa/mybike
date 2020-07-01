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
Route::group(['prefix' => 'admin','middleware' => 'auth'], function() {
    Route::get('news/create', 'Admin\NewsController@add');
    Route::post('news/create', 'Admin\NewsController@create');
    Route::get('news', 'Admin\NewsController@index');
    Route::get('news/edit', 'Admin\NewsController@edit');
    Route::post('news/edit', 'Admin\NewsController@update');
    Route::get('news/delete','Admin\NewsController@delete');
    Route::get('profile', 'Admin\ProfileController@index');
    Route::get('profile/create', 'Admin\ProfileController@add');
    Route::post('profile/create', 'Admin\ProfileController@create');# Laravel 13の課題3で追記
    Route::get('profile/edit', 'Admin\ProfileController@edit');
    Route::post('profile/edit', 'Admin\ProfileController@update');# Laravel 13の課題6で追記
    Route::get('profile/delete', 'Admin\ProfileController@delete');
    Route::get('contact', 'Admin\ContactController@index');
    Route::get('contact/delete', 'Admin\ContactController@delete');
    Route::get('contact/edit', 'Admin\ContactController@edit');
    Route::post('contact/edit', 'Admin\ContactController@update');
});
Route::get('/', 'ProfileController@index');
Route::get('profile', 'ProfileController@index');
Route::get('contact/contact', 'ContactController@add');
Route::post('contact/contact', 'ContactController@input');
Route::post('contact/confirm', 'ContactController@confirm');
Route::get('contact/thanks', 'ContactController@thanks');
Route::get('profile/single', 'ProfileController@single');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
