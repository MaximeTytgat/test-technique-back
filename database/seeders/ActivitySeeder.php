<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Activity;

class ActivitySeeder extends Seeder
{
    /**
     * Create 100 Activity.
     */
    public function run(): void
    {
        Activity::factory()
            ->count(100)
            ->create();
    }
}
