<?php

namespace Database\Factories;

use App\Models\Coche;
use App\Models\coche_user;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Auth;

class coche_userFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = coche_user::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $usuarios = User::all()->where('tipo', 'normal');
        $coches = Coche::all();
        return [
            'user_id' => $this->faker->randomElement($usuarios),
            'coche_id' => $this->faker->randomElement($coches),
            'fecha_alquiler' => $this->faker->date
        ];
    }
}
