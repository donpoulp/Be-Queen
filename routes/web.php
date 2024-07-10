<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/orders', function () {
    return 'liste des commandes';
});

Route::get('/orders/{id}', function ($id) {
    return 'commande numéro' . $id;
});


