<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OrderController;



//Route::middleware('auth:sanctum')->group(function () {
//
//});
Route::get('/order', [OrderController::class, 'displayOrderList']);
Route::get('/order/{id}', [OrderController::class, 'displaySingleOrder']);
Route::post('/order', [OrderController::class, 'addOrder']);
Route::put('/order/{id}', [OrderController::class, 'updateOrder']);
Route::delete('/order/{id}', [OrderController::class, 'deleteOrder']);

