<?php

namespace Database\Factories;

use App\Models\Activity;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Reservation>
 */
class ReservationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $activity = Activity::inRandomOrder()->first();
        $startTime = $activity->start_time;
        return [
            'user_id' => User::inRandomOrder()->first()->id,
            'activity_id' => Activity::inRandomOrder()->first()->id,
            'reserved_at' => $startTime,
        ];
    }
}
