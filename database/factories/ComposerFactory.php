<?php

namespace Database\Factories;

use App\Models\Composer;
use Carbon\CarbonImmutable;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Composer>
 */
class ComposerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $dob = new CarbonImmutable(fake()->dateTimeBetween('-500 years', 'now'));
        $dod = $dob->addYears(fake()->numberBetween(20, 80));

        return [
            'first_name' => fake()->firstName(),
            'last_name' => fake()->lastName(),
            'date_of_birth' => $dob,
            'date_of_death' => $dod
        ];
    }
}
