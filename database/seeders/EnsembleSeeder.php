<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class EnsembleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        $this->command->info('Inserting choir ensembles...');
        DB::table('ensembles')->insert([
            'ensemble_name' => 'Beginner Mixed',
            'ensemble_type_id' => '1',
            'rehearsal_id' => 1,
            'created_at' => Carbon::now()
        ]);

        DB::table('ensembles')->insert([
            'ensemble_name' => 'Intermediate Mixed',
            'ensemble_type_id' => '1',
            'rehearsal_id' => 2,
            'created_at' => Carbon::now()
        ]);

        DB::table('ensembles')->insert([
            'ensemble_name' => 'Advanced Mixed',
            'ensemble_type_id' => '1',
            'rehearsal_id' => 3,
            'created_at' => Carbon::now()
        ]);

        DB::table('ensembles')->insert([
            'ensemble_name' => 'Women\'s Choir',
            'ensemble_type_id' => '1',
            'ensemble_description' => 'This ensemble is by audition only',
            'rehearsal_id' => 4,
            'created_at' => Carbon::now()
        ]);

        DB::table('ensembles')->insert([
            'ensemble_name' => 'Men\'s Choir',
            'ensemble_type_id' => '1',
            'ensemble_description' => 'This ensemble is by audition only',
            'rehearsal_id' => 5,
            'created_at' => Carbon::now()
        ]);

        DB::table('ensembles')->insert([
            'ensemble_name' => 'Vocal Jazz',
            'ensemble_description' => 'This ensemble is by audition only',
            'ensemble_type_id' => '1',
            'rehearsal_id' => 6,
            'created_at' => Carbon::now()
        ]);

        $this->command->info('Inserting string orchestras...');
        DB::table('ensembles')->insert([
            'ensemble_name' => 'Beginner String Orchestra',
            'ensemble_description' => 'String orchestra intended for musicians new to a string instrument',
            'ensemble_type_id' => '3',
            'rehearsal_id' => 7,
            'created_at' => Carbon::now()
        ]);

        DB::table('ensembles')->insert([
            'ensemble_name' => 'Intermediate String Orchestra',
            'ensemble_type_id' => '3',
            'rehearsal_id' => 8,
            'created_at' => Carbon::now()
        ]);

        DB::table('ensembles')->insert([
            'ensemble_name' => 'Advanced String Orchestra',
            'ensemble_type_id' => '3',
            'ensemble_description' => 'This ensemble is by audition only',
            'rehearsal_id' => 9,
            'created_at' => Carbon::now()
        ]);

        $this->command->info('Inserting concert bands...');
        DB::table('ensembles')->insert([
            'ensemble_name' => 'Grade 1',
            'ensemble_type_id' => '2',
            'ensemble_description' => 'For wind players with < 1 year experience',
            'rehearsal_id' => 10,
            'created_at' => Carbon::now()
        ]);

        DB::table('ensembles')->insert([
            'ensemble_name' => 'Grade 2',
            'ensemble_type_id' => '2',
            'ensemble_description' => 'For wind players with 1 - 2 years experience',
            'rehearsal_id' => 11,
            'created_at' => Carbon::now()
        ]);

        DB::table('ensembles')->insert([
            'ensemble_name' => 'Grade 3',
            'ensemble_type_id' => '2',
            'ensemble_description' => 'For wind players with 3 - 4 years experience',
            'rehearsal_id' => 12,
            'created_at' => Carbon::now()
        ]);

        DB::table('ensembles')->insert([
            'ensemble_name' => 'Grade 4/5',
            'ensemble_type_id' => '2',
            'ensemble_description' => 'For wind players with 5+ years experience',
            'rehearsal_id' => 13,
            'created_at' => Carbon::now()
        ]);

        DB::table('ensembles')->insert([
            'ensemble_name' => 'Wind orchestra',
            'ensemble_type_id' => '2',
            'ensemble_description' => 'This ensemble is by audition only',
            'rehearsal_id' => 14,
            'created_at' => Carbon::now()
        ]);

        $this->command->info('Seeding jazz bands...');
        DB::table('ensembles')->insert([
            'ensemble_name' => 'Beginner jazz band',
            'ensemble_type_id' => '4',
            'rehearsal_id' => 15,
            'created_at' => Carbon::now()
        ]);

        DB::table('ensembles')->insert([
            'ensemble_name' => 'Intermediate jazz band',
            'ensemble_type_id' => '4',
            'rehearsal_id' => 16,
            'created_at' => Carbon::now()
        ]);

        DB::table('ensembles')->insert([
            'ensemble_name' => 'Advanced jazz band',
            'ensemble_type_id' => '4',
            'ensemble_description' => 'This ensemble is by audition only',
            'rehearsal_id' => 17,
            'created_at' => Carbon::now()
        ]);
    }
}
