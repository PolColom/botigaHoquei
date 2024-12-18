<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Productes;
use App\Models\Tipus_Producte;

class MaterialJugadorController extends Controller{
    public function index()
    {
        $productes = Productes::whereHas('tipusProducte', function ($query) {
            $query->where('tipus', 'Jugador');
        })->with('tipusProducte')->get();

        return view('materialJugador', ['productes' => $productes]);
    }
}
