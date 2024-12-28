<?php

namespace App\Http\Controllers;

use App\Models\Productes;
use Illuminate\Http\Request;
use Session;

class ComandaController extends Controller{
    public function index(){
        $cistella = session()->get('cistella', []);
        $total = array_reduce($cistella, function ($carry, $item) {
            return $carry + ($item['preu'] * $item['quantitat']);
        }, 0);

        return view('comandes', [
            'cistella' => $cistella,
            'total' => $total,
        ]);
    }

    public function afegir(Request $request, $id){
        $producte = Productes::findOrFail($id);

        $cistella = Session::get('cistella', []);
        $quantitat = $request->input('quantitat', 1);

        if (isset($cistella[$id])) {
            $cistella[$id]['quantitat'] += $quantitat;
        } else {
            $cistella[$id] = [
                'nom' => $producte->nom_producte,
                'descripcio' => $producte->descripcio,
                'preu' => $producte->preu,
                'quantitat' => $quantitat,
                'imatge' => $producte->image_url,
                'stock' => $producte->quantitat_stock,
            ];
        }

        if ($cistella[$id]['quantitat'] > $producte->quantitat_stock) {
            return redirect()->back()->withErrors("No hi ha suficient stock disponible.");
        }

        Session::put('cistella', $cistella);

        return redirect()->route('home')->with('success', 'Producte afegit al carro!');
    }


    public function eliminar($id){
        $cistella = Session::get('cistella', []);
        unset($cistella[$id]);
        Session::put('cistella', $cistella);

        return redirect()->route('cistella.index')->with('success', 'Producte eliminat de la cistella.');
    }

    public function finalitzarCompra(){
        $cistella = Session::get('cistella', []);
        if (empty($cistella)) {
            return redirect()->route('cistella.index')->withErrors("La cistella està buida.");
        }


        Session::forget('cistella');

        return redirect()->route('cistella.index')->with('success', 'Compra finalitzada correctament!');
    }


    public function aplicarDescompte(Request $request){
        $codi = strtolower(trim($request->input('codi')));
        $descomptes = [
            'vic' => 0.25,
            'pati vic' => 0.25,
            'taradell' => 0.15,
            'voltregà' => 0.15,
            'barça' => 0.10,
            'noia' => 0.05,
            'reus' => 0.10,
        ];

        if (array_key_exists($codi, $descomptes)) {
            session(['descompte' => $descomptes[$codi]]);
            return redirect()->back()->with('success', 'Descompte aplicat correctament!');
        }

        return redirect()->back()->with('error', 'Aquest equip no té descompte.');
    }
}
