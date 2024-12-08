<?php

namespace App\Http\Controllers;

use App\Http\Resources\CategoriaCollection;
use App\Models\categorias as ModelsCategorias;
use Illuminate\Http\Request;

class categorias extends Controller
{
    public function index ()
    {

        return new CategoriaCollection(ModelsCategorias::all());
        //return response()->json(['categorias' => ModelsCategorias::all()]);
    }
}
