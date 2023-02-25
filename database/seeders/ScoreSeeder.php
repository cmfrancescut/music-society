<?php

namespace Database\Seeders;

use App\Models\Score;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ScoreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        //Create instrumental scores
        Score::factory()
            ->count(25)
            ->create();

        //Check a few out
        for ($i = 0; $i <= 10; $i++){
            DB::table('music_checkouts')->insert([
                'score_id' => fake()->numberBetween(1, 25),
                'user_id' => 1,
                'ensemble_id' => fake()->numberBetween(1, 17),
                'checked_out' => fake()->dateTimeBetween('-2 years'),
                'checked_in' => fake()->optional(0.3)->dateTimeBetween('-6 months')
            ]);
        }
    }
}
