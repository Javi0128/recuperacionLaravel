<?php

namespace Database\Factories;

use App\Models\Coche;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

class CocheFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Coche::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'marca' => $this->faker->randomElement($array = array ('seat','bmw','mercedes')),
            'modelo' => $this->faker->randomElement($array = array ('leon','a200','m5')),
            'km' => $this->faker->buildingNumber,
            'fecha' => $this->faker->date,
        ];
    }
}
