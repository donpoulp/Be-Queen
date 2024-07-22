<?php
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
// order
use App\Http\Controllers\OrderController;
// categoriy
use App\Http\Controllers\CategoryController;
// custom
use App\Http\Controllers\CustomProductController;
//Jocelyn
use App\Http\Controllers\ProductController;
// auth
use App\Http\Controllers\AuthController;

// AUTH
Route::post('/register', [AuthController::class, 'register']);
Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login');
Route::get('/me', [AuthController::class, 'actualUser'])->middleware('auth:sanctum');

//user
Route::put('/updatecustomer/{id}', [UserController::class, 'updateCustomer']);
Route::post('/getcustomer', [UserController::class, 'postCustomer']);
Route::delete('deletecustomer/{id}', [UserController::class, 'deleteCustomer']);
Route::get('/getUserOrders/{id}', [UserController::class, 'getOrders']);

// category
Route::post('/category', [CategoryController::class, 'insertCategory']);
Route::put('/category/{id}', [CategoryController::class, 'modifCategory']);
Route::patch('/category/{id}', [CategoryController::class, 'updateColumnCategory']);
Route::delete('/category/{id}', [CategoryController::class, 'deleteCategory']);


//Users***************************************************************************************************************
Route::prefix('User')->controller(UserController::class)->group(function () {
    // Tous les users avec leurs categories = /product
    Route::get('/', 'usershow');

    // Recuperer un utilisateur par son id
    Route::get('/{id}',  'userShowid');

    // Modifier un utilisateur par son id
    Route::put('/update/{id}', 'updateUser');

    // crée un users
    Route::post('/post',  'postUser');

    // supprimer un user
    Route::delete('delete/{id}', 'deleteUser');

    // recupère un user avec ses toutes ces commandes
    Route::get('/{id}/Orders/', 'getOrdersByUserId');
});//*******************************************************************************************************************




// produits
Route::prefix('product')->controller(ProductController::class)->group(function () {
   // Tous les produits avec leurs categories = /product
   Route::get('/',  'product')->name('product.index');

   // Un produit par son id  avec sa categorie= /product/id
   Route::get('/{id}', 'productShow')->name('product.show');

   // categorie avec ces produits = /product/categorie/id
   Route::get('/categorie/{id}',  'categorieProduct')->name('product.categorie');

   // crée un  product
   Route::post('/add',   'newProduct')->name('product.new');

   // modifier un  product
   Route::patch('/update/{id}',  'updateProduct')->name('product.update');

   // suprimer un produit
   Route::delete(('/delete/{id}'),  'deleteProduct')->name('product.delete');
});

// orders
Route::get('/order', [OrderController::class, 'displayOrderList']);
Route::get('/order/{id}', [OrderController::class, 'displaySingleOrder']);
Route::post('/order', [OrderController::class, 'addOrder']);
Route::put('/order/{id}', [OrderController::class, 'updateOrder']);
Route::delete('/order/{id}', [OrderController::class, 'deleteOrder']);
Route::get('/getOrders/{id}',[OrderController::class, 'getUser']);
Route::get('/getProducts/{id}',[OrderController::class, 'getProducts']);
Route::get('/getCustomProducts/{id}',[OrderController::class, 'getCustomProducts']);

// CUSTOME PRODUCT
Route::get('customproducts', [CustomProductController::class, 'ShowCustomProducts']);
Route::get('customproduct/{id}', [CustomProductController::class, 'ShowCustomProduct']);
Route::post('customproduct', [CustomProductController::class, 'CreateCustomProducts']);
Route::put('customproduct/{id}', [CustomProductController::class, 'ModifCustomProducts']);
Route::patch('customproduct/{id}', [CustomProductController::class, 'ModifColumnCustomProduct']);
Route::delete('customproduct/{id}', [CustomProductController::class, 'DeleteCustomProduct']);
