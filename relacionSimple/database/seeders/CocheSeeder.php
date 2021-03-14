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
            'marca' => 'BMW',
            'modelo' => 'm5',
            'year'  => 2019,
            'user_id' => 2
        ]);

        Coche::create([
            'marca' => 'Mercedes',
            'modelo' => 'a200',
            'year'  => 2020,
            'user_id' => 2
        ]);
    }
}
