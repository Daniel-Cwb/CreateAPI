<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TrainController;
use App\Http\Controllers\UseController;

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

// colocando as rotas em um pacote

Route::prefix('train')->group(function(){
    Route::get('/',[TrainController::class,'getAll']);
    // colocando para chamar por id
    Route::get('/id/{id}',[TrainController::class,'getById']);
    Route::post('/',[TrainController::class,'insert']);
});

Route::prefix('user')->group(function(){
    // colocando para chamar por id
    Route::get('/id/{id}',[UseController::class,'getUserId']);
});
