<?php

namespace App\Http\Controllers;

use App\Http\Resources\ProductosCollection;
use Illuminate\Http\Request;
use App\Models\productos as ModelsProducts;

class Productos extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return new ProductosCollection(ModelsProducts::all());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
