<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class LocalizationController extends Controller{
    public function index($idioma){ 
        App::setlocale($idioma);  //posar l'idioma per la petició actual
        session()->put('idioma', $idioma);  //guardar l'idioma al sessión per peticiones noves

        return redirect()->back();  //continuar la ruta
    }
}
