<?php

use App\Http\Controllers\Admin\CategoryAdminController;
use App\Http\Controllers\Admin\DasboardController;
use App\Http\Controllers\Admin\OrderAdminController;
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
// Product //
    Route::get('/product' , [ProductAdminController::class, 'productAdmin'])->name('productAdmin');
    Route::get('/product/new' , [ProductAdminController::class, 'newProduct'])->name('newProductAdmin');
// Categories //
    Route::get('/categories', [CategoryAdminController::class, 'bladeCategories'])->name('bladeCategories');

    Route::get('/category/{id}', [CategoryAdminController::class, 'bladeUpdateCategory'])->name('bladeUpdateCategory');
    Route::post('/category/{id}', [CategoryAdminController::class, 'bladeUpdateCategory'])->name('bladeUpdateCategory');

    Route::get('/category/{id}', [CategoryAdminController::class, 'bladeDeleteCategory'])->name('bladeDeleteCategory');

    Route::post('/category', [CategoryAdminController::class, 'bladeCreateCategory'])->name('bladeCreateCategory');
    
    Route::get('/search', [CategoryAdminController::class, 'searchCategory'])->name('searchCategory');

// Orders //
    Route::get('/orders', [OrderAdminController::class, 'bladeOrders'])->name('bladeOrders');

    Route::get('/orders/{id}', [OrderAdminController::class, 'bladeUpdateOrder'])->name('bladeUpdateOrder');
    Route::post('/orders/{id}', [OrderAdminController::class, 'bladeUpdateOrder'])->name('bladeUpdateOrder');

    Route::get('/orders/{id}', [OrderAdminController::class, 'bladeDeleteOrder'])->name('bladeDeleteOrder');

    Route::post('/orders', [OrderAdminController::class, 'bladeCreateOrder'])->name('bladeCreateOrder');

    Route::get('/searchOrder', [OrderAdminController::class, 'searchOrders'])->name('searchOrders');    
    
    // User
    Route::prefix('user')->group(function () {
        Route::get('/', [UserAdminController::class, 'userShow'])->name('userShow');

        Route::get('/delete/{id}', [UserAdminController::class, 'userDelete'])->name('userDelete');
        //Route::post('/post', [UserAdminController::class, 'userPost'])->name('userPost');

        Route::get('/post', [UserAdminController::class, 'userPost'])->name('userPost');
        Route::post('/create', [UserAdminController::class, 'userCreate'])->name('userCreate');
        Route::get('/create', [UserAdminController::class, 'userCreate']);

        Route::get('/Edit/{id}', [UserAdminController::class, 'userEdit'])->name('userEdit');
        Route::put('/put/{id}', [UserAdminController::class, 'userPut'])->name('userPut');
        //Route::get('/patch/{id}', [UserAdminController::class, 'userPatch']);
    });
});
