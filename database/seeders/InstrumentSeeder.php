<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class InstrumentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        $this->command->info('Seeding voice...');
        DB::table('instruments')->insert([
            'instrument' => 'Soprano',
            'chair' => '1'
        ]);

        DB::table('instruments')->insert([
            'instrument' => 'Soprano',
            'chair' => '2'
        ]);

        DB::table('instruments')->insert([
            'instrument' => 'Alto',
        ]);

        DB::table('instruments')->insert([
            'instrument' => 'Baritone',
        ]);

        DB::table('instruments')->insert([
            'instrument' => 'Tenor',
        ]);

        DB::table('instruments')->insert([
            'instrument' => 'Bass',
        ]);

        $this->command->info('Seeding strings...');
        DB::table('instruments')->insert([
            'instrument' => 'Violin',
            'chair' => '1'
        ]);

        DB::table('instruments')->insert([
            'instrument' => 'Violin',
            'chair' => '2'
        ]);

        DB::table('instruments')->insert([
            'instrument' => 'Viola'
        ]);

        DB::table('instruments')->insert([
            'instrument' => 'Cello'
        ]);

        DB::table('instruments')->insert([
            'instrument' => 'Double bass'
        ]);

        $this->command->info('Seeding concert band...');
        DB::table('instruments')->insert([
            'instrument' => 'Piccolo'
        ]);

        DB::table('instruments')->insert([
            'instrument' => 'Flute',
            'chair' => '1'
        ]);

        DB::table('instruments')->insert([
            'instrument' => 'Flute',
            'chair' => '2'
        ]);

        DB::table('instruments')->insert([
            'instrument' => 'Alto flute'
        ]);

        DB::table('instruments')->insert([
            'instrument' => 'Oboe',
            'chair' => '1'
        ]);

        DB::table('instruments')->insert([
            'instrument' => 'Oboe',
            'chair' => '2'
        ]);

        DB::table('instruments')->insert([
            'instrument' => 'English horn'
        ]);

        DB::table('instruments')->insert([
            'instrument' => 'Bassoon',
            'chair' => '1'
        ]);

        DB::table('instruments')->insert([
            'instrument' => 'Clarinet in B♭',
            'chair' => '1'
        ]);

        DB::table('instruments')->insert([
            'instrument' => 'Clarinet in B♭',
            'chair' => '2'
        ]);

        DB::table('instruments')->insert([
            'instrument' => 'Clarinet in B♭',
            'chair' => '3'
        ]);

        DB::table('instruments')->insert([
            'instrument' => 'Bass clarinet'
        ]);

        DB::table('instruments')->insert([
            'instrument' => 'Soprano saxophone'
        ]);

        DB::table('instruments')->insert([
            'instrument' => 'Alto saxophone',
            'chair' => '1'
        ]);

        DB::table('instruments')->insert([
            'instrument' => 'Alto saxophone',
            'chair' => '2'
        ]);

        DB::table('instruments')->insert([
            'instrument' => 'Tenor saxophone',
            'chair' => '1'
        ]);

        DB::table('instruments')->insert([
            'instrument' => 'Trumpet in B♭',
            'chair' => '1'
        ]);

        DB::table('instruments')->insert([
            'instrument' => 'Trumpet in B♭',
            'chair' => '2'
        ]);

        DB::table('instruments')->insert([
            'instrument' => 'Trumpet in B♭',
            'chair' => '3'
        ]);

        DB::table('instruments')->insert([
            'instrument' => 'Horn in F',
            'chair' => '1'
        ]);

        DB::table('instruments')->insert([
            'instrument' => 'Horn in F',
            'chair' => '2'
        ]);

        DB::table('instruments')->insert([
            'instrument' => 'Horn in F',
            'chair' => '3'
        ]);

        DB::table('instruments')->insert([
            'instrument' => 'Horn in F',
            'chair' => '4'
        ]);

        DB::table('instruments')->insert([
            'instrument' => 'Tenor trombone',
            'chair' => '1'
        ]);

        DB::table('instruments')->insert([
            'instrument' => 'Tenor trombone',
            'chair' => '2'
        ]);

        DB::table('instruments')->insert([
            'instrument' => 'Bass trombone'
        ]);

        DB::table('instruments')->insert([
            'instrument' => 'Baritone'
        ]);

        DB::table('instruments')->insert([
            'instrument' => 'Tuba'
        ]);

        $this->command->info('Seeding percussion...');
        DB::table('instruments')->insert([
            'instrument' => 'Percussion',
            'chair' => '1'
        ]);

        DB::table('instruments')->insert([
            'instrument' => 'Percussion',
            'chair' => '2'
        ]);

        DB::table('instruments')->insert([
            'instrument' => 'Percussion',
            'chair' => '3'
        ]);

        DB::table('instruments')->insert([
            'instrument' => 'Percussion',
            'chair' => '4'
        ]);

        DB::table('instruments')->insert([
            'instrument' => 'Timpani'
        ]);

        DB::table('instruments')->insert([
            'instrument' => 'Chimes'
        ]);

        DB::table('instruments')->insert([
            'instrument' => 'Bells'
        ]);

        $this->command->info('Seeding miscellaneous instruments...');
        DB::table('instruments')->insert([
            'instrument' => 'Piano'
        ]);

    }
}
