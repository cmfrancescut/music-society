<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class EnsembleTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        DB::table('ensemble_types')->insert([
            'ensemble_type' => 'Choir',
            'created_at' => Carbon::now()
        ]);

        DB::table('ensemble_types')->insert([
            'ensemble_type' => 'Concert band',
            'created_at' => Carbon::now()
        ]);

        DB::table('ensemble_types')->insert([
           'ensemble_type' => 'String orchestra',
            'created_at' => Carbon::now()
        ]);

        DB::table('ensemble_types')->insert([
            'ensemble_type' => 'Jazz band',
            'created_at' => Carbon::now()
        ]);
    }
}
