<?php

use App\Http\Controllers\CustomerController;
use Illuminate\Support\Facades\Route;


Route::get('/product', function () {
    return 'liste de produit';
});

Route::get('/product/{id}', function (int $id) {
    return 'produit' .$id;
});

Route::get('/customer', [CustomerController::class, 'customershow'] );

Route::get('/customer/{id}', [CustomerController::class, 'customershowid']);

