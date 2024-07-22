<?php

use App\Http\Controllers\Admin\DasboardController;
use App\Http\Controllers\Admin\ProductAdminController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});
#customer
Route::get('/customer', [UserController::class, 'customershow']);

Route::get('/customer/{id}', [UserController::class, 'customershowid']);

#categorie
Route::get('/categories', [CategoryController::class, 'showCategories']);

Route::get('/category/{id}',[CategoryController::class, 'showCategory']);

Route::get('/test/{id}',  [UserController::class, 'test']);



//  ----------------     Admin ---------------------------- //
Route::prefix('Admin')->group(function () {
    Route::get('/' , [DasboardController::class, 'dashboard'])->name('dashboard');
    Route::get('/product' , [ProductAdminController::class, 'productAdmin'])->name('productAdmin');
    Route::get('/product/new' , [ProductAdminController::class, 'newProduct'])->name('newProductAdmin');


});