<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run(): void
    {
        $this->call([
           ScoreSeeder::class,
           ComposerSeeder::class,
           EnsembleSeeder::class,
           RehearsalSeeder::class,
           EnsembleTypeSeeder::class,
           InstrumentSeeder::class,
           InstrumentScoreSeeder::class,
           PublisherSeeder::class,
           DifficultySeeder::class
        ]);
    }
}
