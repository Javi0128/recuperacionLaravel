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
            'name' => 'administrador',
            'surname' => 'surname1',
            'email' => 'admin@gmail.com',
            'tipo' => 'admin',
            'password' => bcrypt('12345678')
        ]);

        User::create([
            'name' => 'lector1',
            'surname' => 'surname1',
            'email' => 'lector1@gmail.com',
            'password' => bcrypt('12345678')
        ]);

        User::create([
            'name' => 'lector2',
            'surname' => 'surname1',
            'email' => 'lector2@gmail.com',
            'password' => bcrypt('12345678')
        ]);
    }
}
