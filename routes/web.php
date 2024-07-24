<?php

use App\Http\Controllers\Admin\DasboardController;
use App\Http\Controllers\Admin\ProductAdminController;
use App\Http\Controllers\Admin\UserAdminController;
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

    // produits
    Route::get('/product' , [ProductAdminController::class, 'productAdmin'])->name('productAdmin');
    Route::get('/product/new' , [ProductAdminController::class, 'newProduct'])->name('newProductAdmin');

    // User
    Route::prefix('user')->group(function () {
        Route::get('/', [UserAdminController::class, 'userShow'])->name('userShow');
        Route::get('/delete/{id}', [UserAdminController::class, 'userDelete'])->name('userDelete');
        Route::post('/post', [UserAdminController::class, 'userPost'])->name('userPost');
    });
});
