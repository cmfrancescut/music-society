<?php

namespace Database\Factories;

use App\Models\Ensemble;
use App\Models\EnsembleType;
use App\Models\Rehearsal;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Ensemble>
 */
class EnsembleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'ensemble_name' => fake()->colorName(),
            'ensemble_type_id' => fake()->numberBetween(1, 4),
            'ensemble_description' => fake()->sentence(),
            'rehearsal_id' => fake()->numberBetween(1, 5)
         ];
    }
}
