<?php

use App\Http\Controllers\CategorieControllers;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});


Route::get('/customer', [UserController::class, 'customershow']);


Route::get('/customer/{id}', [UserController::class, 'customershowid']);




#categorie
Route::get('/categorie', [CategorieControllers::class, 'ShowCategories']);

Route::get('/categorie/{id}',[CategorieControllers::class, 'ShowCategorie']);

Route::get('/test/{id}',  [UserController::class, 'test']);