<?php

namespace Database\Seeders;

use App\Models\coche_user;
use Illuminate\Database\Seeder;

class AlquilaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        coche_user::create([
            'coche_id'  =>   1,
            'user_id'   =>    1
        ]);

        coche_user::create([
            'coche_id'  =>   1,
            'user_id'   =>    2,
            'fecha_alquiler' => '2000-04-11'
        ]);

        coche_user::create([
            'coche_id'  =>   2,
            'user_id'   =>    1,
            'fecha_alquiler' => '2004-03-11'
        ]);

        coche_user::create([
            'coche_id'  =>   2,
            'user_id'   =>    2
        ]);

        coche_user::create([
            'coche_id'  =>   2,
            'user_id'   =>    3
        ]);
    }
}
