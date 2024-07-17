<?php

use App\Http\Controllers\CategorieControllers;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('welcome');
});


Route::get('/customer', [UserController::class, 'customershow'] );


Route::get('/customer/{id}', [UserController::class, 'customershowid']);

// tous les produits
Route::get('/product', [ProductController::class, 'product']);


// un produit par son id
Route::get('/product/{id}',  [ProductController::class, 'productShow']);

#categorie
Route::get('/categorie',[CategorieControllers::class, 'ShowCategories']);

Route::get('/categorie/{id}',[CategorieControllers::class, 'ShowCategorie']);

