<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\MainCharacters>
 */
class MainCharactersFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {      
        return [
            'name' => fake()->firstName('male'),
            'tribe' => fake()->state(),
            'description' => fake()->realText($maxNbChars = 100, $indexSize = 2)
        ];

       
    }
}
