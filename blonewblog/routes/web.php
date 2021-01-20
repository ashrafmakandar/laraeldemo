<?php

use Illuminate\Support\Facades\Route;

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
    return view('create');
});
Route::get('/blogs', 'App\Http\Controllers\BlogController@index');
Route::get('/add', 'App\Http\Controllers\BlogController@create');
Route::get('/edit', 'App\Http\Controllers\BlogController@show');
Route::post('/add', 'App\Http\Controllers\BlogController@store');
Route::delete('blogs/{id}','App\Http\Controllers\BlogController@destroy');
Route::get('/item','App\Http\Controllers\ItemController@show');
Route::get('/items','App\Http\Controllers\ItemController@index');
Route::post('/additem','App\Http\Controllers\ItemController@store');
Route::get('/additems','App\Http\Controllers\ItemController@create');

Route::get('delete-records','App\Http\Controllers\ItemController@index');
Route::get('delete/{id}','App\Http\Controllers\ItemController@destroy');
Route::get('edit/{id}','App\Http\Controllers\ItemController@show');
Route::post('edit/{id}','App\Http\Controllers\ItemController@edit');
Route::post('/register','App\Http\Controllers\UserController@store');

Route::get('/reg','App\Http\Controllers\UserController@index');

Route::get('/login','App\Http\Controllers\UserController@show');
Route::get('/logincheck','App\Http\Controllers\UserController@login');


Route::get('/newtask','App\Http\Controllers\NewTaskController@index');
Route::post('/newadd','App\Http\Controllers\NewTaskController@add');
Route::get('/newshow','App\Http\Controllers\NewTaskController@newshow');


Route::get('/delete/{id}','App\Http\Controllers\NewTaskController@delete');
Route::get('/deletetask','App\Http\Controllers\NewTaskController@newshow');

Route::post('/update/{id}','App\Http\Controllers\NewTaskController@update');
Route::get('/edit/{id}','App\Http\Controllers\NewTaskController@edit');
