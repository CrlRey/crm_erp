<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\categorias;
use App\Http\Controllers\Productos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


Route::apiResource('categorias', categorias::class);
Route::apiResource('productos', Productos::class);

//Login
Route::post('login', [AuthController::class, 'Register']);
