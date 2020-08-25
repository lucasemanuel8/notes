<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

//Route::middleware('auth:api')->get('/user', function (Request $request) {
//    return $request->user();
//});

Route::get('/users', 'Api\\UserController@index');
Route::get('/user/{id}', 'Api\\UserController@show');

Route::get('/notes', 'Api\\NoteController@index');
Route::get('/note/{id}', 'Api\\NoteController@show');

