<?php

namespace App\Http\Controllers;

use App\Models\comanda_producte;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Comanda;
use App\Models\Producte;


class ComandaController extends Controller{
    
    public function index(){
        $comandes = Comanda::with('producte')
            ->where('data', '>=', now())
            ->get();

        $comandesCount = $comandes->count();

        return view('comandes.index', [
            'comandes' => $comandes,
            'comandesCount' => $comandesCount
        ]);
    }
}
