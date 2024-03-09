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

Route::get('/', 'CatalogController@all')->name('main');
Route::view('/laptop', 'laptopPage')->name('lapPage');
Route::view('/login', 'Login')->name('login');
Route::view('/createAccount', 'Account')->name('createAccount');
Route::view('/admin', 'AdminPanel')->name('admin');
Route::get('/{categoryParam}', 'CatalogController@categoryFilter')->name('category');

