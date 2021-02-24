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

Route::get('/stores', 'App\Http\Controllers\StoreController@index');
Route::get('stores/{store}', 'App\Http\Controllers\StoreController@show');
Route::get('stores/{store}/products', 'App\Http\Controllers\StoreController@products');
Route::post('stores', 'App\Http\Controllers\StoreController@store');
Route::put('stores/{store}', 'App\Http\Controllers\StoreController@update');
Route::delete('stores/{store}', 'App\Http\Controllers\StoreController@destroy');

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
