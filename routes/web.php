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

Route::get('/', 'TeamsController@index');
Route::get('/nba/teams/{id}', ['as' => 'timovi', 'uses' => 'TeamsController@show']);
Route::get('/nba/players/{id}', 'PlayersController@show');

Route::post('/nba/teams/{id}/comments',
 ['as' => 'comments-post', 'uses' => 'CommentsController@store']);

Route::get('/register', 'RegisterController@create');
Route::post('/register', 'RegisterController@store');

Route::get('/verify/{id}', 'LoginController@verify');

Route::get('/logout', 'LoginController@destroy');
Route::get('/login', 'LoginController@create');
Route::post('/login', 'LoginController@store');