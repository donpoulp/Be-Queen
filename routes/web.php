<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/product', function () {
    return 'liste de produit';
});

Route::get('/product/{id}', function (int $id) {
    return 'produit' .$id;
});

Route::get('/customer', function () {
    return 'liste de client';
});

Route::get('/customer/{id}', function (int $id) {
    return 'client' .$id;
});
