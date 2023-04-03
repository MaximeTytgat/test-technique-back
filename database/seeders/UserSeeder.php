<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Create 100 Users.
     */
    public function run(): void
    {
        User::factory()
            ->count(100)
            ->create();
    }
}
