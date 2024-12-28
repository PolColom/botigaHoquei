<?php

namespace App\Http\Controllers;

use App\Models\Productes;
use Illuminate\Http\Request;

class ProductesController extends Controller
{
    public function index()
    {
        $productes = Productes::paginate(10);
        return view('productes.index', compact('productes'));
    }

    public function create()
    {
        if (auth()->user()->role !== 'admin') {
            return redirect('/')->with('error', 'No tens permís per accedir a aquesta pàgina.');
        }
        return view('productes.create');
    }

    public function store(Request $request){
        if (auth()->user()->role !== 'admin') {
            return redirect('/')->with('error', 'No tens permís per accedir a aquesta pàgina.');
        }

        $request->validate([
            'nom_producte' => 'required|string|max:255',
            'image_url' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'quantitat_stock' => 'required|integer|min:0',
            'preu' => 'required|numeric|min:0',
            'descripcio' => 'nullable|string',
            'tipus_producte_id' => 'required|integer|in:1,2',
        ]);


        $fileName = time() . '_' . $request->file('image_url')->getClientOriginalName();
        $request->file('image_url')->move(public_path('images'), $fileName);


        $producte = Productes::create([
            'nom_producte' => $request->input('nom_producte'),
            'image_url' => 'images/' . $fileName,
            'quantitat_stock' => $request->input('quantitat_stock'),
            'preu' => $request->input('preu'),
            'descripcio' => $request->input('descripcio'),
            'tipus_producte_id' => $request->input('tipus_producte_id'),
        ]);

        if ($producte->tipus_producte_id == 1) {
            return redirect()->route('materialPorter.index')->with('success', 'Producte afegit correctament!');
        } 
        else {
            return redirect()->route('materialJugador.index')->with('success', 'Producte afegit correctament!');
        }
    }




    public function show($id){
        $producte = Productes::findOrFail($id);

        return view('productes.show', compact('producte'));
    }

    public function edit($id){
        if (auth()->user()->role !== 'admin') {
            return redirect('/')->with('error', 'No tens permís per accedir a aquesta pàgina.');
        }

        $producte = Productes::findOrFail($id);

        return view('productes.edit', compact('producte'));
    }

    public function update(Request $request, $id){
        if (auth()->user()->role !== 'admin') {
            return redirect('/')->with('error', 'No tens permís per accedir a aquesta pàgina.');
        }

        $request->validate([
            'nom_producte' => 'required|string|max:255',
            'image_url' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'quantitat_stock' => 'required|integer|min:0',
            'preu' => 'required|numeric|min:0',
            'descripcio' => 'nullable|string',
        ]);

        $producte = Productes::findOrFail($id);

        $producte->nom_producte = $request->input('nom_producte');
        $producte->quantitat_stock = $request->input('quantitat_stock');
        $producte->preu = $request->input('preu');
        $producte->descripcio = $request->input('descripcio');

        if ($request->hasFile('image_url')) {
            if ($producte->image_url && file_exists(public_path($producte->image_url))) {
                unlink(public_path($producte->image_url));
            }

            $fileName = time() . '_' . $request->file('image_url')->getClientOriginalName();
            $request->file('image_url')->move(public_path('images'), $fileName);
            $producte->image_url = 'images/' . $fileName;
        }

        $producte->save();

        if ($producte->tipus_producte_id == 1) {
            return redirect()->route('materialPorter.index')->with('success', 'Producte actualitzat correctament!');
        } 
        else {
            return redirect()->route('materialJugador.index')->with('success', 'Producte actualitzat correctament!');
        }
    }

    public function destroy($id)
    {
        if (auth()->user()->role !== 'admin') {
            return redirect('/')->with('error', 'No tens permís per accedir a aquesta pàgina.');
        }

        $producte = Productes::findOrFail($id);

        if ($producte->image_url && file_exists(public_path($producte->image_url))) {
            unlink(public_path($producte->image_url));
        }

        $producte->delete();

        if ($producte->tipus_producte_id == 1) {
            return redirect()->route('materialPorter.index')->with('success', 'Producte actualitzat correctament!');
        } 
        else {
            return redirect()->route('materialJugador.index')->with('success', 'Producte actualitzat correctament!');
        }
    }
}
