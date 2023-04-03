<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

use App\Models\User;
use App\Models\Activity;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\UserActivity>
 */
class UserActivityFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => User::all()->random()->id,
            'activity_id' => Activity::all()->random()->id,
            'point_in_time' => fake()->time(),
            'speed' => fake()->randomDigit()
        ];
    }
}
