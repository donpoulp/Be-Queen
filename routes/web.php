<?php

use App\Http\Controllers\CategorieControllers;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

# product
Route::get('/product', function () {
    return 'liste de produit';
});

Route::get('/product/{id}', function (int $id) {
    return 'produit' .$id;
});

#customer
Route::get('/customer', function () {
    return 'liste de client';
});

Route::get('/customer/{id}', function (int $id) {
    return 'client' .$id;
});

#categorie
Route::get('/categorie',[CategorieControllers::class, 'ShowCategories']);

Route::get('/categorie/{id}',[CategorieControllers::class, 'ShowCategorie']);
