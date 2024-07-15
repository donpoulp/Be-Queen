<?php

use App\Http\Controllers\CategorieControllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::post('/categorie',[CategorieControllers::class, 'InsertCategorie']);
Route::put('/categorie/{id}',[CategorieControllers::class, 'ModifCategorie']);
Route::patch('/categorie/{id}',[CategorieControllers::class, 'Modif1RowCategorie']);
Route::delete('/categorie/{id}',[CategorieControllers::class, 'DeleteCategorie']);