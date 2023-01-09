<?php

namespace Database\Factories;

use App\Models\Facultade;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class FacultadeFactory extends Factory
{
    protected $model = Facultade::class;

    public function definition()
    {
        return [
			'name' => $this->faker->name,
			'shortname' => $this->faker->name,
        ];
    }
}
