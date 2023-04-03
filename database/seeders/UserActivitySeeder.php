<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\UserActivity;

class UserActivitySeeder extends Seeder
{
    /**
     *  Create 100 UserActivity.
     */
    public function run(): void
    {
        UserActivity::factory()
            ->count(100)
            ->create();
    }
}
