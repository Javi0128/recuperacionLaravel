<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Administrador',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('12345678'),
            'tipo' => 'admin'
        ]);

        User::create([
            'name' => 'conductor1',
            'email' => 'conductor1@gmail.com',
            'password' => bcrypt('12345678')
        ]);

        User::create([
            'name' => 'conductor2',
            'email' => 'conductor2@gmail.com',
            'password' => bcrypt('12345678')
        ]);
    }
}
