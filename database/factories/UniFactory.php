<?php

namespace Database\Factories;

use App\Models\Uni;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class UniFactory extends Factory
{
    protected $model = Uni::class;

    public function definition()
    {
        return [
			'name' => $this->faker->name,
			'address' => $this->faker->name,
			'logo' => $this->faker->name,
			'status' => $this->faker->name,
			'shortname' => $this->faker->name,
        ];
    }
}
