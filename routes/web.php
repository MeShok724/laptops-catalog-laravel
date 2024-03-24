<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin;

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
Route::get('/search', 'CatalogController@search')->name('search');

Route::get('/myacc', 'Account@myacc')->name('myacc');
Route::get('/logout', 'Account@logout')->name('logout');
Route::view('/log', 'Login')->name('log');
Route::view('/createAccount', 'Account')->name('createAccount');

Route::get('/admin', 'Admin@catalog')->name('admin');
Route::post('/admin/create', 'Admin@create')->name('adminCreate');
Route::post('/admin/{id}/update', 'Admin@update')->name('adminUpdate');
Route::post('/admin/{id}/delete', 'Admin@delete')->name('adminDelete');
Route::get('/admin/filtr/{categoryParam}', 'Admin@categoryFilter')->name('adminCategory');
    //Route::get('/users/registration-dates', 'Admin@regDate')->name('regDate');
    //Route::get('/calendar', function () {return view('Calendar');})->name('calendar');

Route::get('/text', 'TextControl@index');
Route::post('/text', 'TextControl@process');

Auth::routes();


