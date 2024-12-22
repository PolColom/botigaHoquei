<?php

namespace App\Http\Controllers;

use App\Models\productes;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductesController extends Controller
{
    // Mostrar tots els productes
    public function index()
    {
        $productes = Productes::all();
        return view('productes.index', compact('productes'));
    }

    // Mostrar el formulari per crear un nou producte
    public function create()
    {
        return view('productes.create');
    }

    // Afegir un nou producte a la base de dades
    public function store(Request $request)
    {
        $request->validate([
            'nom_producte' => 'required|string|max:255',
            'image_url' => 'required|url',
            'quantitat_stock' => 'required|integer|min:0',
            'preu' => 'required|numeric|min:0',
            'descripcio' => 'nullable|string',
        ]);

        Productes::create($request->all());

        return redirect()->route('productes.index')->with('success', 'Producte afegit correctament!');
    }

    // Mostrar els detalls d'un producte específic
    public function show($id)
    {
        $producte = Productes::findOrFail($id);
        return view('detalls', ['producte' => $producte]);
    }

    // Eliminar un producte de la base de dades
    public function destroy($id)
    {
        $producte = Productes::findOrFail($id);
        $producte->delete();

        return redirect()->route('productes.index')->with('success', 'Producte eliminat correctament!');
    }

    // Mostrar el formulari per editar un producte
    public function edit($id)
    {
        $producte = Productes::findOrFail($id);
        return view('productes.edit', compact('producte'));
    }

    // Actualitzar el preu d'un producte
    public function update(Request $request, $id)
    {
        $request->validate([
            'preu' => 'required|numeric|min:0',
        ]);

        $producte = Productes::findOrFail($id);
        $producte->update(['preu' => $request->input('preu')]);

        return redirect()->route('materialJugador.index')->with('success', 'Preu actualitzat correctament!');
    }
}
