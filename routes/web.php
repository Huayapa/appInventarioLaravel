<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SaleController;
use App\Http\Controllers\SaleDetailController;
use App\Http\Controllers\WelcomeController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [WelcomeController::class, 'index'])->name('welcome');
Route::get('/buy/{product}', [WelcomeController::class, 'buyProduct'])->name('buy.product');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // Route::get('products', [ProductController::class, 'index'])->name('products.index');
    // Route::get('products/create', [ProductController::class, 'create'])->name('products.create');
    // Route::post('products/create', [ProductController::class, 'store'])->name('products.store');
    // Route::get('products/edit/{product}', [ProductController::class, 'edit'])->name('products.edit');
    // Route::put('products/edit/{product}', [ProductController::class, 'update'])->name('products.update');
    // Route::delete('products/delete/{product}', [ProductController::class, 'destroy'])->name('products.destroy');

    Route::resource('products', ProductController::class);
    Route::resource('sales', SaleController::class);
    Route::resource('sale_details', SaleDetailController::class);

});



require __DIR__.'/auth.php';
