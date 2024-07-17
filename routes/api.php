<?php

use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
// orderController
use App\Http\Controllers\OrderController;
//cotegorie
use App\Http\Controllers\CategorieControllers;
//Jocelyn
use App\Http\Controllers\ProductController;

//users
Route::get('/user', function (Request $request) {
   return $request->user();
})->middleware('auth:sanctum');
Route::put('/updatecustomer/{id}', [UserController::class, 'updateCustomer']);
Route::post('/getcustomer', [UserController::class, 'postCustomer']);
Route::delete('deletecustomer/{id}', [UserController::class, 'deleteCustomer']);
Route::get('/getUserOrders/{id}', [UserController::class, 'getOrders']);



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


// orders
Route::get('/order', [OrderController::class, 'displayOrderList']);
Route::get('/order/{id}', [OrderController::class, 'displaySingleOrder']);
Route::post('/order', [OrderController::class, 'addOrder']);
Route::put('/order/{id}', [OrderController::class, 'updateOrder']);
Route::delete('/order/{id}', [OrderController::class, 'deleteOrder']);
Route::get('/getOrders/{id}',[OrderController::class, 'getUser']);
Route::get('/getProducts/{id}',[OrderController::class, 'getProducts']);
