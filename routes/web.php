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

Route::get('/usuarios', 'UserController@index')->name('users');

Route::get('/usuarios/{user}', 'UserController@show')->where('user', '[0-9]+')->name('users.show');

Route::get('/usuarios/nuevo', 'UserController@create')->name('users.create');

Route::post('/usuarios', 'UserController@store')->name('users.store');

Route::get('/usuario/{user}/edit', 'UserController@edit')->name('users.edit');

Route::post('/usuarios/{user}', 'UserController@update')->name('users.update');

Route::delete('/usuarios/{user}', 'UserController@destroy')->name('users.delete');

//Route::get('/saludo/{name}/{apodo?}', 'UserController@saludo');
