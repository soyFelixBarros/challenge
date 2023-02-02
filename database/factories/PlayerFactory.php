<?php

namespace Database\Factories;

use App\Models\Gender;
use Illuminate\Database\Eloquent\Factories\Factory;

class PlayerFactory extends Factory
{
    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'gender_id' => Gender::factory()->create()->id,
        ];
    }
}
