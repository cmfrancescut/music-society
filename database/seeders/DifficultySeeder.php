<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class DifficultySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        DB::table('difficulty')->insert([
            'difficulty_description' => 'Grade 1'
        ]);

        DB::table('difficulty')->insert([
            'difficulty_description' => 'Grade 2'
        ]);

        DB::table('difficulty')->insert([
            'difficulty_description' => 'Grade 3'
        ]);

        DB::table('difficulty')->insert([
            'difficulty_description' => 'Grade 4'
        ]);

        DB::table('difficulty')->insert([
            'difficulty_description' => 'Grade 5'
        ]);

        DB::table('difficulty')->insert([
            'difficulty_description' => 'Grade 6'
        ]);
    }
}
