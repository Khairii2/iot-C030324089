<?php

use illuminate\Http\Request;
use illuminate\Support\Facades\Route;

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

//lamps
Route::get('/lamps', [App\Http\Controllers\Api\LampController::class, 'index']);

//update lamp
Route::post('/lamps/{id}', [App\Http\Controllers\Api\LampController::class, 'updateLamp']);

//status lamps
Route::get('/status', [App\Http\Controllers\Api\StatusController::class, 'index']);

//histories
Route::get('/histories', [App\Http\Controllers\Api\HistoryController::class, 'index']);
