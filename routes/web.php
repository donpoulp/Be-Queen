<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
// tous les produits
Route::get('/product', [ProductController::class, 'product']);

// un produit par son id
Route::get('/product/{id}',  [ProductController::class, 'productShow']);
