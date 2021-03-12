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
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('12345678'),
            'tipo' => 'admin'
        ]);

        User::create([
            'name' => 'Cliente1',
            'surname' => 'Surname1 Surname2',
            'email' => 'cliente1@gmail.com',
            'password' => bcrypt('12345678'),
        ]);

        User::create([
            'name' => 'Cateyano',
            'surname' => 'Surname1 Surname2',
            'email' => 'caye@gmail.com',
            'password' => bcrypt('12345678'),
        ]);
    }
}
