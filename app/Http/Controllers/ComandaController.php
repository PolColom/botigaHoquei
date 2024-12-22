<?php

namespace App\Http\Controllers;

use App\Models\comanda_producte;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Comanda;
use App\Models\Producte;
use App\Models\Productes;
use Session;

class ComandaController extends Controller{
    public function index(){
        $comandes = Comanda::with('producte')
            ->where('data', '>=', now())
            ->get();

        $comandesCount = $comandes->count();

        $cistella = session()->get('cistella', []);
        $total = array_reduce($cistella, function ($carry, $item) {
            return $carry + ($item['preu'] * $item['quantitat']);
        }, 0);

        return view('comandes.index', [
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

        return redirect()->route('comanda.index')->with('success', 'Producte afegit al carro!');
    }

    // Eliminar producte de la cistella
    public function eliminar($id)
    {
        $cistella = Session::get('cistella', []);
        unset($cistella[$id]);
        Session::put('cistella', $cistella);

        return redirect()->route('comanda.index')->with('success', 'Producte eliminat de la cistella.');
    }

    // Finalitzar la compra
    public function finalitzarCompra()
    {
        $cistella = Session::get('cistella', []);
        if (empty($cistella)) {
            return redirect()->route('comanda.index')->withErrors("La cistella està buida.");
        }

        // Aquí pots afegir la lògica per desar les comandes a la base de dades.

        // Neteja la cistella després de finalitzar la compra
        Session::forget('cistella');

        return redirect()->route('comanda.index')->with('success', 'Compra finalitzada correctament!');
    }
}
