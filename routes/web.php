<?php

use App\Http\Controllers\Admin\DasboardController;
use App\Http\Controllers\Admin\ProductAdminController;
use App\Http\Controllers\CategorieControllers;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});








#categorie
Route::get('/categorie', [CategorieControllers::class, 'ShowCategories']);

Route::get('/categorie/{id}',[CategorieControllers::class, 'ShowCategorie']);

Route::get('/test/{id}',  [UserController::class, 'test']);



//  ----------------     Admin ---------------------------- //
Route::prefix('Admin')->group(function () {
    Route::get('/' , [DasboardController::class, 'dashboard'])->name('dashboard');
    Route::get('/product' , [ProductAdminController::class, 'productAdmin'])->name('productAdmin');
    Route::get('/product/new' , [ProductAdminController::class, 'newProduct'])->name('newProductAdmin');


});