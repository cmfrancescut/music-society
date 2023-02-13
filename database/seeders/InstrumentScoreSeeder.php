<?php

namespace Database\Seeders;

use App\Models\Score;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class InstrumentScoreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        //Create Scores
        $scores = Score::factory()
            ->count(25)
            ->create([
                'complete_score' => true
            ]);

        foreach ($scores as $score) {
            switch ($score->ensemble_type_id) {
                case 1:
                    $this->seedChoirScore($score->id);
                    break;
                case 2:
                    $this->seedConcertBandScore($score->id);
                    break;
                case 3:
                    $this->seedStringOrchestraScore($score->id);
                    break;
                case 4:
                    $this->seedJazzBandScore($score->id);
                    break;
            }
        }
    }

    private function seedChoirScore ($score_id): void {
        DB::table('instrument_score')->insert([
           'instrument_id' => 1,
            'score_id' => $score_id,
            'filename' => fake()->filePath(),
            'created_at' => Carbon::now()
        ]);

        DB::table('instrument_score')->insert([
            'instrument_id' => 2,
            'score_id' => $score_id,
            'filename' => fake()->filePath(),
            'created_at' => Carbon::now()
        ]);

        DB::table('instrument_score')->insert([
            'instrument_id' => 3,
            'score_id' => $score_id,
            'filename' => fake()->filePath(),
            'created_at' => Carbon::now()
        ]);

        DB::table('instrument_score')->insert([
            'instrument_id' => 4,
            'score_id' => $score_id,
            'filename' => fake()->filePath(),
            'created_at' => Carbon::now()
        ]);

        DB::table('instrument_score')->insert([
            'instrument_id' => 5,
            'score_id' => $score_id,
            'filename' => fake()->filePath(),
            'created_at' => Carbon::now()
        ]);

        DB::table('instrument_score')->insert([
            'instrument_id' => 6,
            'score_id' => $score_id,
            'filename' => fake()->filePath(),
            'created_at' => Carbon::now()
        ]);
    }

    private function seedConcertBandScore ($score_id): void {
        $instrument = 12; //Concert band instruments range from 12 to 46

        while($instrument <=46) {
            DB::table('instrument_score')->insert([
                'instrument_id' => $instrument,
                'score_id' => $score_id,
                'filename' => fake()->filePath(),
                'created_at' => Carbon::now()
            ]);

            $instrument++;
        }
    }

    private function seedStringOrchestraScore ($score_id): void {
        DB::table('instrument_score')->insert([
            'instrument_id' => 7,
            'score_id' => $score_id,
            'filename' => fake()->filePath(),
            'created_at' => Carbon::now()
        ]);

        DB::table('instrument_score')->insert([
            'instrument_id' => 8,
            'score_id' => $score_id,
            'filename' => fake()->filePath(),
            'created_at' => Carbon::now()
        ]);

        DB::table('instrument_score')->insert([
            'instrument_id' => 9,
            'score_id' => $score_id,
            'filename' => fake()->filePath(),
            'created_at' => Carbon::now()
        ]);

        DB::table('instrument_score')->insert([
            'instrument_id' => 10,
            'score_id' => $score_id,
            'filename' => fake()->filePath(),
            'created_at' => Carbon::now()
        ]);

        DB::table('instrument_score')->insert([
            'instrument_id' => 11,
            'score_id' => $score_id,
            'filename' => fake()->filePath(),
            'created_at' => Carbon::now()
        ]);
    }

    private function seedJazzBandScore ($score_id): void {
        DB::table('instrument_score')->insert([
            'instrument_id' => 25,
            'score_id' => $score_id,
            'filename' => fake()->filePath(),
            'created_at' => Carbon::now()
        ]);

        DB::table('instrument_score')->insert([
            'instrument_id' => 26,
            'score_id' => $score_id,
            'filename' => fake()->filePath(),
            'created_at' => Carbon::now()
        ]);

        DB::table('instrument_score')->insert([
            'instrument_id' => 27,
            'score_id' => $score_id,
            'filename' => fake()->filePath(),
            'created_at' => Carbon::now()
        ]);

        DB::table('instrument_score')->insert([
            'instrument_id' => 28,
            'score_id' => $score_id,
            'filename' => fake()->filePath(),
            'created_at' => Carbon::now()
        ]);

        DB::table('instrument_score')->insert([
            'instrument_id' => 29,
            'score_id' => $score_id,
            'filename' => fake()->filePath(),
            'created_at' => Carbon::now()
        ]);

        DB::table('instrument_score')->insert([
            'instrument_id' => 30,
            'score_id' => $score_id,
            'filename' => fake()->filePath(),
            'created_at' => Carbon::now()
        ]);

        DB::table('instrument_score')->insert([
            'instrument_id' => 35,
            'score_id' => $score_id,
            'filename' => fake()->filePath(),
            'created_at' => Carbon::now()
        ]);

        DB::table('instrument_score')->insert([
            'instrument_id' => 36,
            'score_id' => $score_id,
            'filename' => fake()->filePath(),
            'created_at' => Carbon::now()
        ]);

        DB::table('instrument_score')->insert([
            'instrument_id' => 37,
            'score_id' => $score_id,
            'filename' => fake()->filePath(),
            'created_at' => Carbon::now()
        ]);

        DB::table('instrument_score')->insert([
            'instrument_id' => 40,
            'score_id' => $score_id,
            'filename' => fake()->filePath(),
            'created_at' => Carbon::now()
        ]);

        DB::table('instrument_score')->insert([
            'instrument_id' => 47,
            'score_id' => $score_id,
            'filename' => fake()->filePath(),
            'created_at' => Carbon::now()
        ]);

        DB::table('instrument_score')->insert([
            'instrument_id' => 11,
            'score_id' => $score_id,
            'filename' => fake()->filePath(),
            'created_at' => Carbon::now()
        ]);
    }
}
