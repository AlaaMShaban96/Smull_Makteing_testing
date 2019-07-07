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

Route::get(            '/',     "ItemsController@view");

Route::get(  'items/index',     "ItemsController@view");
Route::get( 'items/create',     "ItemsController@create");
Route::post('items/create',     "ItemsController@stor");
Route::get(   'items/{id}',     "ItemsController@delete");

Route::get( 'sinup / view',     "UsersController@view");
Route::get(        'sinup',     "UsersController@create");
Route::get(        'login',     "UsersController@login");//TODO

