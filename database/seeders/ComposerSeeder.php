<?php

namespace Database\Seeders;

use App\Models\Composer;
use Illuminate\Database\Seeder;

class ComposerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        Composer::factory()
            ->count(5)
            ->create();
    }
}
