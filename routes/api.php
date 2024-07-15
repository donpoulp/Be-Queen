<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

// crée un  product
Route::post('/add-product',  [ProductController::class, 'newProduct']);

// crée un  product
Route::patch('/update-product/{id}',  [ProductController::class, 'updateProduct']);

// suprimer un produit
Route::delete(('/delete-product/{id}'), [ProductController::class, 'deleteProduct']);
