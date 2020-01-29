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

Route::get('/search','FindteamController@show');
// Route::get('/createTeam','FindteamController@create');


