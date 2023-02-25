<?php

namespace Database\Factories;

use App\Models\Composer;
use App\Models\Publisher;
use App\Models\Score;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends Factory<Score>
 */
class ScoreFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => Str::ucfirst(fake()->words(3, true)),
            'composer_id' => fake()->numberBetween(1, 5),
            'ensemble_type_id' => fake()->numberBetween(2, 5),
            'complete_score' => fake()->boolean(85),
            'publisher_id' => fake()->numberBetween(1, 5),
            'difficulty_id' => fake()->numberBetween(1, 6)
        ];
    }
}
