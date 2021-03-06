<?php

use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\CategoriesController;

Route::prefix('/admin')->group(function(){
    Route::get('/',[DashboardController::class,'getDashboard'])->name('dashboard');

    //Usuarios
    Route::get('/users/{status}',[UserController::class,'getUsers'])->name('users');
    Route::get('/user/{id}/edit',[UserController::class,'getUserEdit'])->name('user_edit');
    Route::post('/user/{id}/edit',[UserController::class,'postUserEdit'])->name('user_edit');
    Route::get('/user/{id}/banned',[UserController::class,'getUserBanned'])->name('user_banned');
    Route::get('/user/{id}/permissions',[UserController::class,'getUserPermissions'])->name('user_permissions');
    Route::post('/user/{id}/permissions',[UserController::class,'postUserPermissions'])->name('user_permissions');

    //Productos
    Route::get('/products/{status}',[ProductController::class,'getHome'])->name('products');
    Route::get('/product/add',[ProductController::class,'getProductAdd'])->name('product_add');
    Route::post('/product/add',[ProductController::class,'postProductAdd'])->name('product_add');
    Route::post('/product/search',[ProductController::class,'postProductSearch'])->name('product_search');
    Route::get('/product/{id}/edit',[ProductController::class,'getProductEdit'])->name('product_edit');
    Route::post('/product/{id}/edit',[ProductController::class,'postProductEdit'])->name('product_edit');
    Route::get('/product/{id}/delete',[ProductController::class,'getProductDelete'])->name('product_delete');
    Route::get('/product/{id}/restore',[ProductController::class,'getProductRestore'])->name('product_delete');
    Route::post('product/{id}/gallery/add',[ProductController::class,'postProductGalleryAdd'])->name('product_gallery_add');
    Route::get('product/{id}/gallery/{gid}/add',[ProductController::class,'getProductGalleryDelete'])->name('product_gallery_delete');
    

    //Categorias
    Route::get('/categories/{module}',[CategoriesController::class,'getHome'])->name('categories');
    Route::post('/category/add',[CategoriesController::class,'postCategoryAdd'])->name('category_add');
    Route::get('/category/{id}/edit',[CategoriesController::class,'getCategoryEdit'])->name('category_edit');
    Route::post('/category/{id}/edit',[CategoriesController::class,'postCategoryEdit'])->name('category_edit');
    Route::get('/category/{id}/delete',[CategoriesController::class,'getCategoryDelete'])->name('category_delete');



});
