<?php

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Http\Controllers\ProductController;


Route::get('/', function () {
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

/**
 * Parte publica 
 */

 Route::get('product/{slug}/view',[ProductController::class,'view'])->name('product.view');
 Route::get('products',[ProductController::class,'showAllProducts'])->name('products.show');

 Route::get('dashboard',function(){
    return Inertia::render('Dashboard');
})->name('dashboard');



//Rutas que necesitan login

Route::group(["middleware"=> ['auth:sanctum']],function(){ 
    /// Son url demos
    Route::get('admin/products',[ProductController::class,'adminProducts'])->name('admin.products')->middleware('can:product create');
    Route::get('admin/users',function(){
        return 'estoy en admin/users';
    })->name('users.index')->middleware('can:user create');

    /**
     * Products 
    */
    Route::get('admin/product/show',[ProductController::class,'showAdminProduct'])->name('admin.product.show')->middleware('can:product read');
    Route::get('admin/product/get-data',[ProductController::class,'getData'])->name('admin.product.get.data')->middleware('can:product read');
    
    Route::get('admin/product/create',[ProductController::class,'create'])->name('admin.product.create')->middleware('can:product read');
    Route::post('admin/product/create',[ProductController::class,'create'])->name('admin.product.create')->middleware('can:product read');
});