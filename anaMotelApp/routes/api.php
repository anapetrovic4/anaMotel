<?php

use Illuminate\Http\Request;
use App\Http\Controllers\GostController;
use App\Http\Controllers\IznajmljivanjeController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::get('/gosti', [GostController::class,'index']);
Route::get('/gosti/{id}', [GostController::class,'show']);
Route::delete('/gosti/{id}', [GostController::class,'destroy']);
Route::post('/gosti', [GostController::class,'store']);
Route::put('/gosti/{id}', [GostController::class,'update']);


Route::get('/renta', [IznajmljivanjeController::class,'index']);
Route::get('/renta/{id}', [IznajmljivanjeController::class,'show']);



Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
