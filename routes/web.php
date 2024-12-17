<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\MaterialJugadorController;
use App\Http\Controllers\MaterialPorterController;

use App\Http\Controllers\ComandaController;


Route::get('/', function () {
    return view('home');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/', function () {
    return view('home');
})->name('home');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    //Web --> Tabs Menu
    Route::get('/material-jugador', [MaterialJugadorController::class, 'index'])->name('materialJugador');
    Route::get('/material-porter', [MaterialPorterController::class, 'index'])->name('materialPorter');

    Route::get('/comandes', [ComandaController::class, 'index'])->name('comandes');
    
});

require __DIR__.'/auth.php';
