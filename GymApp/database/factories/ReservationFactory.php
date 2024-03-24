<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;
use App\Models\Activity;
use App\Models\Reservation;

class ReservationFactory extends Factory
{   
     /**
    * Define the model's default state.
    *
    * @return array<string, mixed>
    */
   public function definition(): array
   {
       return [
           'user_id' => User::inRandomOrder()->first()->id ?? User::factory()->create()->id,
           'activity_id' => Activity::inRandomOrder()->first()->id ?? Activity::factory()->create()->id,
           'reserved_at' => $this->faker->dateTimeBetween('now', '+1 month'),
            'status' => $this->faker->randomElement(['pending', 'confirmed', 'cancelled']),
        ];
    }
}