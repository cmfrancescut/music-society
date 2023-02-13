<?php

namespace Database\Seeders;

use App\Models\Rehearsal;
use Illuminate\Database\Seeder;

class RehearsalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        Rehearsal::factory()
            ->count(17)
            ->create();
    }
}
