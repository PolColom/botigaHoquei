<?php

namespace App\Http\Controllers;

use App\Models\Productes;
use Illuminate\Http\Request;
use App\Models\Tipus_Producte;

class MaterialPorterController extends Controller{
    public function index(){
        $productes = Productes::whereHas('tipusProducte', function ($query) {
            $query->where('tipus', 'Porter');
        })->with('tipusProducte')->get();

        return view('materialPorter', ['productes' => $productes]);
    }

}
