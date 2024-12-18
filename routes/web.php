<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\MaterialJugadorController;
use App\Http\Controllers\MaterialPorterController;
use App\Http\Controllers\ComandaController;
use App\Http\Controllers\CistellaController;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    //Perfil
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    //Pàgina de Material
    Route::get('/material-jugador', [MaterialJugadorController::class, 'index'])->name('materialJugador.index');
    Route::get('/material-porter', [MaterialPorterController::class, 'index'])->name('materialPorter.index');

    //Cistella i Comandes
    Route::post('/cistella/afegir/{id}', [CistellaController::class, 'afegir'])->name('cistella.afegir');
    Route::get('/comandes', [ComandaController::class, 'index'])->name('comandes');
});

require __DIR__.'/auth.php';
