<?php

namespace Database\Seeders;

use App\Models\Coche;
use Illuminate\Database\Seeder;

class CocheSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Coche::create([
            'marca' => 'Seat',
            'modelo' => 'ibiza',
            'km' => 100,
            'fecha' => '10/03/2012'
        ]);

        Coche::create([
            'marca' => 'Seat',
            'modelo' => 'león',
            'km' => 50,
            'fecha' => '10/05/2019'
        ]);

    }
}
