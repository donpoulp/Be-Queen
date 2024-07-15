<?php

// orderController
use App\Http\Controllers\OrderController;
//cotegorie
use App\Http\Controllers\CategorieControllers;
//Jocelyn
use App\Http\Controllers\ProductController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

// categorie
Route::post('/categorie',[CategorieControllers::class, 'InsertCategorie']);
Route::put('/categorie/{id}',[CategorieControllers::class, 'ModifCategorie']);
Route::patch('/categorie/{id}',[CategorieControllers::class, 'Modif1RowCategorie']);
Route::delete('/categorie/{id}',[CategorieControllers::class, 'DeleteCategorie']);

// crée un  product
Route::post('/add-product',  [ProductController::class, 'newProduct']);

// crée un  product
Route::patch('/update-product/{id}',  [ProductController::class, 'updateProduct']);

// suprimer un produit
Route::delete(('/delete-product/{id}'), [ProductController::class, 'deleteProduct']);



Route::get('/order', [OrderController::class, 'displayOrderList']);
Route::get('/order/{id}', [OrderController::class, 'displaySingleOrder']);
Route::post('/order', [OrderController::class, 'addOrder']);
Route::put('/order/{id}', [OrderController::class, 'updateOrder']);
Route::delete('/order/{id}', [OrderController::class, 'deleteOrder']);

