<?php

namespace App\Http\Controllers;

use App\Models\Productes;
use Illuminate\Http\Request;
use App\Models\Tipus_Producte;

class MaterialPorterController extends Controller{
    public function index(){
        $productes = Productes::where('tipus_producte_id', 1)->get();
        return view('materialPorter', compact('productes'));
    }


}
