<?php

namespace Database\Factories;

use App\Models\Jefesdepartamento;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class JefesdepartamentoFactory extends Factory
{
    protected $model = Jefesdepartamento::class;

    public function definition()
    {
        return [
			'user_id' => $this->faker->name,
			'depto_id' => $this->faker->name,
			'uni_id' => $this->faker->name,
			'accountnumber' => $this->faker->name,
        ];
    }
}
