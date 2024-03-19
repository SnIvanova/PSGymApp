<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Activity>
 */
class ActivityFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {    
        
        
        
        $timeSlots = [
            '09:00:00', // 9:00 AM
            '11:00:00', // 11:00 AM
            '14:00:00', // 2:00 PM
            '16:00:00', // 4:00 PM
        ];

        $startDate = $this->faker->dateTimeBetween('now', '+7 days')->format('Y-m-d');

        $startTime = $this->faker->randomElement($timeSlots);
        $endTime = date('H:i:s', strtotime($startTime . '+1 hour'));

        // Concatenate date and time for start_time and end_time
        $startTime = $startDate . ' ' . $startTime;
        $endTime = $startDate . ' ' . $endTime;
        return [
            'name' => fake()->sentence(3),
            'description' => fake()->paragraph,
            'start_time' => $startTime,
            'end_time' => $endTime,
           /*  'color' => '#' . str_pad(dechex(mt_rand(0, 0xFFFFFF)), 6, '0', STR_PAD_LEFT), */

        ];
    }
}
