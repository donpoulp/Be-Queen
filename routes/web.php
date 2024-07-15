<?php

use App\Http\Controllers\CategorieControllers;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CustomerController;
use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('welcome');
});


Route::get('/customer', [CustomerController::class, 'customershow'] );


Route::get('/customer/{id}', [CustomerController::class, 'customershowid']);

// tous les produits
Route::get('/product', [ProductController::class, 'product']);


// un produit par son id
Route::get('/product/{id}',  [ProductController::class, 'productShow']);

#categorie
Route::get('/categorie',[CategorieControllers::class, 'ShowCategories']);

Route::get('/categorie/{id}',[CategorieControllers::class, 'ShowCategorie']);

