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
Route::get('/findTeam','FindteamController@index');

Route::resource('/createTeam', 'PositionController');

Route::post('/findTeam/search','FindteamController@show');
Route::get('/findTeam/detail/{id}','TeamController@show');

//Route::get('/findTeam/detail/{username}','TeamController@show');
Route::get('/profile/{username}','ProfileController@index');
Route::get('/profile/{username}','ProfileController@show');
// Route::get('/createTeam','FindteamController@create');


