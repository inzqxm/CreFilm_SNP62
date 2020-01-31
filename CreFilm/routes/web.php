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


use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Auth::routes();

Route::get('/', function () {
    return view('index');
});
Route::get('/findteam','FindteamController@index');

Route::resource('/createTeam', 'PositionController');

Route::post('/findteam/search','FindteamController@show');
Route::get('/findteam/detail/{id}','TeamController@show');

//Route::get('/findTeam/detail/{username}','TeamController@show');
Route::get('/profile/{id}','ProfileController@index');
Route::get('/profile/{id}','ProfileController@show');
Route::get('/profile/{id}/edit','ProfileController@edit');
Route::post('/profile/{id}','ProfileController@update');
// Route::get('/createTeam','FindteamController@create');


