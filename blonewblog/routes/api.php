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

Route::post('/model','App\Http\Controllers\ApiController@index');
Route::get('/show','App\Http\Controllers\ApiController@show');
Route::get('/show/{id}','App\Http\Controllers\ApiController@fetch');
Route::delete('delete/{id}','App\Http\Controllers\ApiController@delete');
Route::put('update/{id}','App\Http\Controllers\ApiController@update');

