<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DeviceController;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});



// HEre we start learn api

Route::get('data',[dummyAPI::class,'getData']);

Route::get('list',[DeviceController::class,'list']);

Route::POST('add',[DeviceController::class,'add']);

Route::put('update',[DeviceController::class,'update']);

Route::delete('delete/{id}',[DeviceController::class,'delete']);
Route::get('search/{name}',[DeviceController::class,'search']);
