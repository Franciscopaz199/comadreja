<?php

namespace Database\Factories;

use App\Models\Unihascarrera;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class UnihascarreraFactory extends Factory
{
    protected $model = Unihascarrera::class;

    public function definition()
    {
        return [
			'university_id' => $this->faker->name,
			'career_id' => $this->faker->name,
        ];
    }
}
