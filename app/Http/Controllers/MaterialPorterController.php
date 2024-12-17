<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MaterialPorterController extends Controller
{
    public function index()
    {
        return view('material-porter');
    }
}

