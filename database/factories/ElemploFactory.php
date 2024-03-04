<?php

namespace Database\Factories;

use App\Models\Elemplo;
use Illuminate\Database\Eloquent\Factories\Factory;

class ElemploFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Elemplo::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nombre' => $this->faker->name()
            //'numero_de_trimestres' => $this->faker->randomElement([2, 3]),
        ];
    }
}
