<?php

namespace Database\Seeders;

use App\Models\categorias as ModelsCategorias;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class categorias extends Seeder
{

    public function run(): void
    {
        $jsonData = File::get('database/data/categorias.json');
        $data = json_decode($jsonData, true);

        foreach ($data as $value) {
            ModelsCategorias::create([
                "nombre" => $value['nombre'],
                "icono" =>$value['icono'],
            ]);
        }


    }
}
