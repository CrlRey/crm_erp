<?php

namespace Database\Seeders;

use App\Models\productos as ModelProducts;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;
class productos extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $jsonData = File::get('database/data/productos.json');
        $data = json_decode($jsonData, true);

        foreach ($data as $value) {
            ModelProducts::create([
                "nombre" => $value['nombre'],
                "precio" =>$value['precio'],
                "imagen" =>$value['imagen'],
                "categoria_id" =>$value['categoria_id'],


            ]);
        }
    }
}
