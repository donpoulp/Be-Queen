<?php

use App\Http\Controllers\CustomerController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
   return $request->user();
})->middleware('auth:sanctum');

Route::put('/updatecustomer/{id}', [CustomerController::class, 'updateCustomer']);

Route::post('/getcustomer', [CustomerController::class, 'postCustomer']);

Route::delete('deletecustomer/{id}', [CustomerController::class, 'deleteCustomer']);