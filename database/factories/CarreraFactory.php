<?php

namespace Database\Factories;

use App\Models\Carrera;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class CarreraFactory extends Factory
{
    protected $model = Carrera::class;

    public function definition()
    {
        return [
			'name' => $this->faker->name,
			'shortname' => $this->faker->name,
			'status' => $this->faker->name,
			'logo' => $this->faker->name,
			'description' => $this->faker->name,
			'color1' => $this->faker->name,
			'color2' => $this->faker->name,
			'color3' => $this->faker->name,
			'facultad' => $this->faker->name,
        ];
    }
}
