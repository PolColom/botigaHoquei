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

Route::get('/prova-admin', function () {
    return 'Aquesta pàgina només és accessible per administradors.';
})->middleware('auth');

// Rols
Route::group(['middleware' => 'auth'], function () {
    Route::get('/productes/create', function () {
        if (auth()->user() && auth()->user()->role === 'admin') {
            return app(ProductesController::class)->create();
        }
        return redirect('/')->with('error', 'No tens permís per accedir a aquesta pàgina.');
    })->name('productes.create');

    Route::post('/productes', function () {
        if (auth()->user() && auth()->user()->role === 'admin') {
            return app(ProductesController::class)->store(request());
        }
        return redirect('/')->with('error', 'No tens permís per accedir a aquesta pàgina.');
    })->name('productes.store');

    Route::get('/productes/{id}/edit', function ($id) {
        if (auth()->user() && auth()->user()->role === 'admin') {
            return app(ProductesController::class)->edit($id);
        }
        return redirect('/')->with('error', 'No tens permís per accedir a aquesta pàgina.');
    })->name('productes.edit');

    Route::put('/productes/{id}', function ($id) {
        if (auth()->user() && auth()->user()->role === 'admin') {
            return app(ProductesController::class)->update(request(), $id);
        }
        return redirect('/')->with('error', 'No tens permís per accedir a aquesta pàgina.');
    })->name('productes.update');

    Route::delete('/productes/{id}', function ($id) {
        if (auth()->user() && auth()->user()->role === 'admin') {
            return app(ProductesController::class)->destroy($id);
        }
        return redirect('/')->with('error', 'No tens permís per accedir a aquesta pàgina.');
    })->name('productes.destroy');
});



Route::middleware('auth')->group(function () {
    //Rutes generals per a productes
    Route::resource('productes', ProductesController::class)->except(['show']);
    Route::get('/productes/{id}', [ProductesController::class, 'show'])->name('productes.show');

    //Perfil
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/profile/show', [ProfileController::class, 'show'])->name('profile.show');

    //Pàgina Material
    Route::get('/material-jugador', [MaterialJugadorController::class, 'index'])->name('materialJugador.index');
    Route::get('/material-porter', [MaterialPorterController::class, 'index'])->name('materialPorter.index');

    Route::get('/material-porter', [MaterialPorterController::class, 'index'])->name('materialPorter.index');
    Route::get('/material-jugador', [MaterialJugadorController::class, 'index'])->name('materialJugador.index');


    //Producte Detalls
    Route::get('/producte/{id}', [ProductesController::class, 'show'])->name('detalls');
    Route::get('/productes/{id}/edit', [ProductesController::class, 'edit'])->name('productes.edit');
    Route::get('/productes', [ProductesController::class, 'index'])->name('productes.index');
    Route::delete('/productes/{id}', [ProductesController::class, 'destroy'])->name('productes.destroy');
    Route::get('/productes/{id}', [ProductesController::class, 'show'])->name('productes.show');



    //Cistella i Comandes
    Route::post('/comanda/afegir/{id}', [ComandaController::class, 'afegir'])->name('comanda.afegir');
    Route::get('/comandes', [ComandaController::class, 'index'])->name('comandes.index');
    Route::delete('/comandes/eliminar/{id}', [ComandaController::class, 'eliminar'])->name('comandes.eliminar');
    Route::post('/comandes/finalitzar', [ComandaController::class, 'finalitzarCompra'])->name('comandes.finalitzar');
    Route::post('/cistella/afegir/{id}', [ComandaController::class, 'afegir'])->name('cistella.afegir');
    Route::get('/cistella', [ComandaController::class, 'index'])->name('cistella.index');
    Route::post('/cistella/afegir/{id}', [ComandaController::class, 'afegir'])->name('cistella.afegir');


    //Descomptes
    Route::post('/comandes/descompte', [ComandaController::class, 'aplicarDescompte'])->name('comandes.descompte');
});

//Missatges d'error
Route::fallback(function () {
    return response()->view('errors.403', [
        'message' => 'No tens permís per accedir a aquesta pàgina.'
    ], 403);
});


//Canvi idioma
Route::get('/lang/{idioma}', 'App\Http\Controllers\LocalizationController@index')
    ->where('idioma', 'ca|en|es|fr');

require __DIR__.'/auth.php';
