<?php

namespace Database\Factories;

use App\Models\Clase;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class ClaseFactory extends Factory
{
    protected $model = Clase::class;

    public function definition()
    {
        return [
			'name' => $this->faker->name,
			'description' => $this->faker->name,
			'departamento' => $this->faker->name,
			'codigo' => $this->faker->name,
			'UV' => $this->faker->name,
			'dificultad' => $this->faker->name,
        ];
    }
}
