<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Productes;
use App\Models\Tipus_Producte;


class MaterialJugadorController extends Controller{
    public function index(){
        $productes = Productes::where('tipus_producte_id', 2)->get();
        return view('materialJugador', compact('productes'));
    }

}
