<?php

namespace App\Http\Controllers;

use App\Models\productes;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductesController extends Controller
{

    public function index(){
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    public function show($id){
        $producte = Productes::findOrFail($id); 
        return view('detalls', ['producte' => $producte]);
    }



    /**
     * Show the form for editing the specified resource.
     */
    public function edit(productes $productes)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, productes $productes)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(productes $productes)
    {
        //
    }
}
