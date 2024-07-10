<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/category', function () {
    return 'liste des categories';
});

Route::get('/category/{id}', function ($id) {
    return 'category' . $id;
});


