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



Route::get('/', 'ConfigController@show');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/home/create','ConfigController@create')->name('create');
Route::post('/home','ConfigController@store')->name('store');

Route::delete('/home/{product}','ConfigController@delete')->name('delete');
Route::delete('/home/{product}','ConfigController@delete')->name('delete');

Route::get('/search','ConfigController@search')->name('search');
Route::get('/search/{category}','ConfigController@searchCategory')->name('category');

