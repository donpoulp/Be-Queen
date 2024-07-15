<?php

use App\Http\Controllers\CustomerController;
use Illuminate\Support\Facades\Route;

//Route::get('/', function(){
//    return view('welcome');
//});


Route::get('/customer', [CustomerController::class, 'customershow'] );

Route::get('/customer/{id}', [CustomerController::class, 'customershowid']);

