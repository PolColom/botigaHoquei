<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producte;

class CistellaController extends Controller
{
    public function index()
    {
        $cistella = session()->get('cistella', []);
        return view('cistella.index', ['cistella' => $cistella]);
    }

    public function afegir($id)
    {
        $producte = Producte::findOrFail($id);

        $cistella = session()->get('cistella', []);

        if (isset($cistella[$id])) {
            $cistella[$id]['quantitat']++;
        } else {
            $cistella[$id] = [
                'nom' => $producte->nom_producte,
                'preu' => $producte->tipusProducte->preu,
                'quantitat' => 1
            ];
        }

        session()->put('cistella', $cistella);

        return redirect()->route('cistella.index')->with('success', 'Producte afegit a la cistella!');
    }

    public function eliminar()
    {
        session()->forget('cistella');
        return redirect()->route('cistella.index')->with('success', 'Cistella buidada correctament.');
    }
}
