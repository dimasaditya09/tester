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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


Route::get('/menu', 'MenuController@index');
Route::post('/menu/store', 'MenuController@store');
Route::put('/menu/update/{id}', 'MenuController@update');
Route::delete('/menu/delete/{id}', 'MenuController@delete');
