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

Route::get('/', 'MemoController@index')->name('memo.index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::post('/', 'MemoController@store')->name('memo.store');
Route::put('/{id}', 'MemoController@update')->name('memo.update');
Route::get('/{id}/edit', 'MemoController@edit')->name('memo.edit');
Route::delete('/{id}', 'MemoController@destroy')->name('memo.delete');
Route::get('/create','MemoController@create')->name('memo.create');