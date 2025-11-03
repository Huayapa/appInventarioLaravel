<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

//RUTAS DE PRODUCTOS

Route::get('/productos', function () {
    return view('productos.index');
});

Route::get('/productos/edit', function () {
    return view('productos.edit');
})->name('productos.edit');

Route::get('/productos/crear', function () {
    return view('productos.create');
})->name('productos.create');

//RUTAS DE VENTAS

Route::get('/ventas', function () {
    return view('ventas.index');
})->name('ventas.index');

Route::get('/ventas/crear', function () {
    return view('ventas.create');
})->name('ventas.create');

Route::get('/ventas/edit', function () {
    return view('ventas.edit');
})->name('ventas.edit');

//RUTA DETALLE DE VENTAS

Route::get('/detalle-ventas', function () {
    return view('detalle_ventas.index');
});

Route::get('/detalle-ventas/crear', function () {
    return view('detalle_ventas.create');
})->name('detalle_ventas.create');

Route::get('/detalle-ventas/edit', function () {
    return view('detalle_ventas.edit');
})->name('detalle_ventas.edit');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});



require __DIR__.'/auth.php';
