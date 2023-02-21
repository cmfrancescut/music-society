<?php

namespace Database\Factories;

use App\Models\Composer;
use App\Models\Publisher;
use App\Models\Score;
use Illuminate\Database\Eloquent\Factories\Factory;

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
            'name' => fake()->sentence(3),
            'complete_score' => fake()->boolean(),
            'composer_id' => fake()->numberBetween(1, 5),
            'ensemble_type_id' => fake()->numberBetween(1, 4),
            'publisher_id' => fake()->numberBetween(1, 5),
            'difficulty' => 'Grade ' . fake()->numberBetween(1, 5)
        ];
    }
}
