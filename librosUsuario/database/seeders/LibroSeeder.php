<?php

namespace Database\Seeders;

use App\Models\Libro;
use Illuminate\Database\Seeder;

class LibroSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Libro::create([
            'nombre' => 'Bajo la Misma Estrella',
            'autor' => 'Navarrete',
            'editorial' => 'Vega de Mijas SL'
        ]);

        Libro::create([
            'nombre' => '3 metros sobre el cielo',
            'autor' => 'Navarrete',
            'editorial' => 'Vega de Mijas SL'
        ]);
    }
}
