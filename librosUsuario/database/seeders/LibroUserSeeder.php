<?php

namespace Database\Seeders;

use App\Models\LibroUser;
use Illuminate\Database\Seeder;

class LibroUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        LibroUser::create([
            'user_id' => '2',
            'libro_id' => '1',
            'fecha' => '11/03/2020'
        ]);

        LibroUser::create([
            'user_id' => '2',
            'libro_id' => '1',
            'fecha' => '11/03/2021'
        ]);

        LibroUser::create([
            'user_id' => '2',
            'libro_id' => '2'
        ]);

        LibroUser::create([
            'user_id' => '1',
            'libro_id' => '2'
        ]);

        LibroUser::create([
            'user_id' => '3',
            'libro_id' => '1'
        ]);

        LibroUser::create([
            'user_id' => '3',
            'libro_id' => '2'
        ]);
    }
}
