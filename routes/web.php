<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\Admin\DasboardController;
use App\Http\Controllers\Admin\CustomAdminController;
use App\Http\Controllers\Admin\ProductAdminController;


Route::get('/', function () {
    return view('welcome');
});

#customer
Route::get('/customer', [UserController::class, 'customershow']);


Route::get('/customer/{id}', [UserController::class, 'customershowid']);




#categorie
Route::get('/categories', [CategoryController::class, 'showCategories']);

Route::get('/category/{id}', [CategoryController::class, 'showCategory']);

Route::get('/test/{id}',  [UserController::class, 'test']);



//  ----------------     Admin ---------------------------- //
Route::prefix('Admin')->group(function () {
    Route::get('/', [DasboardController::class, 'dashboard'])->name('dashboard');



    Route::prefix('product')->group(function () {
        // Tous les Produit //
        Route::get('/', [ProductAdminController::class, 'productAdmin'])->name('productAdmin');
        // ---------------------------------------------------------------------------------------------- //
        Route::get('/search' ,[ProductAdminController::class, 'searchProduct'])->name('searchProduct' );
           // ---------------------------------------------------------------------------------------------- //
        // Ajout d'un Produit 
        Route::get('/new', [ProductAdminController::class, 'Product'])->name('product');
        Route::post('/', [ProductAdminController::class, 'newProduct'])->name('newProduct');
        
        // Modifier un produit //
        Route::get('/{id}', [ProductAdminController::class, 'getOneProduct'])->name('getOneProduct');;
        Route::put('/update/{id}', [ProductAdminController::class, 'updateProduct'])->name('updateProduct');
     
        // suprimer un produit //
        Route::delete('/delete/{id}', [ProductAdminController::class, 'deleteProduct'])->name('deleteProduct');
        
    });

    Route::prefix('custom')->group(function () {
        // ----------------       Wheel   -------------------------------------------------------------//
        Route::get('/whell', [CustomAdminController::class, 'wheelCustom'])->name('wheelCustom');
        Route::get('/whell/new', [CustomAdminController::class, 'newWheelView'])->name('newWheelView');
        Route::post('/', [CustomAdminController::class, 'newWheel'])->name('newWheel');
        
        Route::get('/whell/{id}', [CustomAdminController::class, 'getProductWheel'])->name('getProductWheel');;
        Route::put('/whell/update/{id}', [CustomAdminController::class, 'updateWheel'])->name('updateWheel');

        Route::delete('/whell/delete/{id}', [CustomAdminController::class, 'deleteWheel'])->name('deleteWheel');
//--------------------------------------------------------------------------------------------------------------------//

        Route::get('/pedal', [CustomAdminController::class, 'pedalCustom'])->name('pedalCustom');
        Route::delete('/pedal/delete/{id}', [CustomAdminController::class, 'deletePedal'])->name('deletePedal');
//--------------------------------------------------------------------------------------------------------------------//

        Route::get('/propulsion', [CustomAdminController::class, 'propulsion'])->name('propulsion');
        Route::delete('propulsion/delete/{id}', [CustomAdminController::class, 'deletePropulsion'])->name('deletePropulsion');
//--------------------------------------------------------------------------------------------------------------------//

        Route::get('/porteBagages', [CustomAdminController::class, 'porteBagages'])->name('porteBagages');
        Route::delete('porteBagages/delete/{id}', [CustomAdminController::class, 'deletePorteBagage'])->name('deletePorteBagage');
//--------------------------------------------------------------------------------------------------------------------//

        Route::get('/guidon', [CustomAdminController::class, 'guidon'])->name('guidon');
        Route::delete('guidon/delete/{id}', [CustomAdminController::class, 'deleteguidon'])->name('deleteguidon');
//--------------------------------------------------------------------------------------------------------------------//

        Route::get('/poignee', [CustomAdminController::class, 'poignee'])->name('poignee');
        Route::delete('poignee/delete/{id}', [CustomAdminController::class, 'deletepoignee'])->name('deletepoignee');
//--------------------------------------------------------------------------------------------------------------------//

        Route::get('/cadre', [CustomAdminController::class, 'cadre'])->name('cadre');
        Route::delete('cadre/delete/{id}', [CustomAdminController::class, 'deleteCadre'])->name('deleteCadre');


    });
});
