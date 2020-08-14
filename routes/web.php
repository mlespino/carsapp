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

Route::get('/cars', [
    'uses'=>'CarController@index',
    'as'=>'cars.index'
]);

//Get Dashboard Page
Route::get('/', [
    'uses'=>'DashboardController@index',
    'as'=>'dashboard.index'
]);

Route::get('/cars/create',[
    'uses'=>'CarController@create',
    'as'=>'cars.create'
]);

Route::post('/cars/',[
    'uses'=>'CarController@store',
    'as'=>'cars.store'
]);

Route::get('/cars/{car}/edit', [
    'uses'=>'CarController@edit',
    'as'=>'cars.edit'
]);

Route::post('/cars/{car}',[
    'uses'=>'CarController@update',
    'as'=>'cars.update'
]);

Route::delete('/cars/{car}',[
    'uses'=>'CarController@destroy',
    'as'=>'cars.delete'
]);
