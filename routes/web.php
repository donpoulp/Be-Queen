<?php

use App\Http\Controllers\CategorieControllers;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CustomerController;
use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('welcome');
});


Route::get('/customer', [CustomerController::class, 'customershow']);


Route::get('/customer/{id}', [CustomerController::class, 'customershowid']);



#categorie
Route::get('/categorie', [CategorieControllers::class, 'ShowCategories']);

Route::get('/categorie/{id}', [CategorieControllers::class, 'ShowCategorie']);
