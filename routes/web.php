<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\MaterialJugadorController;
use App\Http\Controllers\MaterialPorterController;
use App\Http\Controllers\ComandaController;
use App\Http\Controllers\ProductesController;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// Rols
Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('/admin/productes', [ProductesController::class, 'index'])->name('admin.productes.index');
    Route::get('/admin/productes/create', [ProductesController::class, 'create'])->name('admin.productes.create');
    Route::post('/admin/productes', [ProductesController::class, 'store'])->name('admin.productes.store');
    Route::get('/admin/productes/{id}/edit', [ProductesController::class, 'edit'])->name('admin.productes.edit');
    Route::put('/admin/productes/{id}', [ProductesController::class, 'update'])->name('admin.productes.update');
    Route::delete('/admin/productes/{id}', [ProductesController::class, 'destroy'])->name('admin.productes.destroy');

    // Ruta per crear productes
    Route::get('/productes/create', [ProductesController::class, 'create'])->name('productes.create');
    Route::post('/productes/store', [ProductesController::class, 'store'])->name('productes.store');
    Route::get('/productes/{id}/edit', [ProductesController::class, 'edit'])->name('productes.edit'); // <-- AFEGIT
    Route::delete('/productes/{id}', [ProductesController::class, 'destroy'])->name('productes.destroy'); // <-- AFEGIT
});

Route::middleware('auth')->group(function () {
    // Perfil
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/profile/show', [ProfileController::class, 'show'])->name('profile.show');

    // Pàgina de Material
    Route::get('/material-jugador', [MaterialJugadorController::class, 'index'])->name('materialJugador.index');
    Route::get('/material-porter', [MaterialPorterController::class, 'index'])->name('materialPorter.index');

    // Producte Detalls
    Route::get('/producte/{id}', [ProductesController::class, 'show'])->name('detalls');

    // Cistella i Comandes
    Route::post('/comanda/afegir/{id}', [ComandaController::class, 'afegir'])->name('comanda.afegir');
    Route::get('/comandes', [ComandaController::class, 'index'])->name('comandes.index');
    Route::delete('/comandes/eliminar/{id}', [ComandaController::class, 'eliminar'])->name('comandes.eliminar');
    Route::post('/comandes/finalitzar', [ComandaController::class, 'finalitzarCompra'])->name('comandes.finalitzar');
    Route::post('/cistella/afegir/{id}', [ComandaController::class, 'afegir'])->name('cistella.afegir');
    Route::get('/cistella', [ComandaController::class, 'index'])->name('cistella.index');

    // Descomptes
    Route::post('/comandes/descompte', [ComandaController::class, 'aplicarDescompte'])->name('comandes.descompte');
});

require __DIR__.'/auth.php';
