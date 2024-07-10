<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OrderController;



Route::get('/', function () {
    return view('welcome');
});

Route::get('/order/{id}', [OrderController::class, 'displaySingleOrder']);
Route::get('/order', [OrderController::class, 'displayOrderList']);



