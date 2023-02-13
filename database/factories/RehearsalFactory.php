<?php

namespace Database\Factories;

use App\Models\Rehearsal;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Rehearsal>
 */
class RehearsalFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $time = new Carbon();
        $time->hour(19);
        $time->minute(0);
        $time->second(0);

        return [
            'location_name' => fake()->streetName(),
            'location_street_address' => fake()->streetAddress(),
            'location_city' => 'Calgary',
            'location_province' => 'AB',
            'location_country' => 'CA',
            'location_postal_code' => fake()->postcode(),
            'rehearsal_day' => fake()->dayOfWeek(),
            'rehearsal_time' => $time
        ];
    }
}
