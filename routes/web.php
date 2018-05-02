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

Route::get ('/',          'SuperheroController@index')  ->name('index');
Route::get ('/create',    'SuperheroController@create') ->name('superhero.create');
Route::post('/',          'SuperheroController@store')  ->name('superhero.store');
Route::get ('/{id}/edit', 'SuperheroController@edit')   ->name('superhero.edit');
Route::put ('edit/{id}',  'SuperheroController@update') ->name('superhero.update');
Route::delete('/{id}',    'SuperheroController@destroy')->name('superhero.destroy');
