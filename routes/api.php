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


//Ruta de api para obtener los documentos de base
Route::get('/api/centro_ingreso', 'App\Http\Controllers\CentroController@getCentroIngreso')->name('api.centro_ingreso.list');
Route::get('/api/centro_costo', 'App\Http\Controllers\CentroController@getCentroCosto')->name('api.centro_costo.list');
Route::get('/api/centro_venta', 'App\Http\Controllers\CentroController@getCentroVenta')->name('api.centro_venta.list');
