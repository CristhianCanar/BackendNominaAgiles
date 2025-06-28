<?php

use App\Http\Controllers\UserApiController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NominaController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::apiResource('nominas',NominaController::class);

Route::get('/user', [UserApiController::class, 'index']);
Route::post('/user', [UserApiController::class, 'store']);
