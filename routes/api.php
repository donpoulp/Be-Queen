<?php

use App\Http\Controllers\CustomerController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
// orderController
use App\Http\Controllers\OrderController;
//cotegorie
use App\Http\Controllers\CategorieControllers;
//Jocelyn
use App\Http\Controllers\ProductController;

Route::get('/user', function (Request $request) {
   return $request->user();
})->middleware('auth:sanctum');

Route::put('/updatecustomer/{id}', [CustomerController::class, 'updateCustomer']);

Route::post('/getcustomer', [CustomerController::class, 'postCustomer']);

Route::delete('deletecustomer/{id}', [CustomerController::class, 'deleteCustomer']);

// categorie
Route::post('/categorie', [CategorieControllers::class, 'InsertCategorie']);
Route::put('/categorie/{id}', [CategorieControllers::class, 'ModifCategorie']);
Route::patch('/categorie/{id}', [CategorieControllers::class, 'Modif1RowCategorie']);
Route::delete('/categorie/{id}', [CategorieControllers::class, 'DeleteCategorie']);

// produits
Route::prefix('product')->controller(ProductController::class)->group(function () {
   // Tous les produits avec leurs categories = /product
   Route::get('/',  'product')->name('product.index');

   // Un produit par son id  avec sa categorie= /product/id
   Route::get('/{id}', 'productShow')->name('product.show');

   // categorie avec ces produits = /product/categorie/id
   Route::get('/categorie/{id}',  'productCategorie')->name('product.categorie');

   // crée un  product
   Route::post('/add',   'newProduct')->name('product.new');

   // modifier un  product
   Route::patch('/update/{id}',  'updateProduct')->name('product.update');

   // suprimer un produit
   Route::delete(('/delete/{id}'),  'deleteProduct')->name('product.delete');
});



Route::get('/order', [OrderController::class, 'displayOrderList']);
Route::get('/order/{id}', [OrderController::class, 'displaySingleOrder']);
Route::post('/order', [OrderController::class, 'addOrder']);
Route::put('/order/{id}', [OrderController::class, 'updateOrder']);
Route::delete('/order/{id}', [OrderController::class, 'deleteOrder']);
