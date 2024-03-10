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

Route::get('/filtr/{categoryParam}', 'CatalogController@categoryFilter')->name('category');
Route::get('/laptop{laptopID}', 'CatalogController@lapPage')->name('lapPage');

Route::get('/myacc', 'Account@myacc')->name('myacc');
Route::view('/log', 'Login')->name('log');
Route::view('/createAccount', 'Account')->name('createAccount');

Route::get('/admin', 'Admin@catalog')->name('admin');

Auth::routes();
Route::get('/home', 'CatalogController@all')->name('home');
