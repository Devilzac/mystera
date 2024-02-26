<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Alt>
 */
class AltFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->firstName('female') . "2",
            'tribe' => fake()->state() . "2",
            'description' => fake()->realText($maxNbChars = 100, $indexSize = 2)
        ];
    }
}
