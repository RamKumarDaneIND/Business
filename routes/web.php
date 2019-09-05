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
    return view('front/home');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/dashboard', 'Dashboard@index')->name('dashboard');
Route::get('/business-category', 'BusinessCategory@index')->name('business-category');
Route::get('/new-Business-Category', 'BusinessCategory@create')->name('new-business-category');
Route::get('/add-category', 'BusinessCategory@add_category')->name('add-category');
Route::get('/edit-category', 'BusinessCategory@edit_category')->name('edit-category');
Route::get('/delete-category', 'BusinessCategory@edit_category')->name('delete-category');

