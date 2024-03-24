<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Corsi>
 */
class CorsiFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $start_time = fake()->dateTimeBetween('now', '+2 month');
        $end_time = clone $start_time;
        $end_time->modify('+1 hour');

        $settimana=['Domenica', 'Lunedì', 'Martedì', 'Mercoledì', 'Giovedì', 'Venerdì', 'Sabato'];

        return [
            'titolo' => fake()->word(),
            'descrizione' => fake()->text(200),
            'giorno' => fake()->randomElement($settimana),
            'orario_inizio' => $start_time,
            'orario_fine' => $end_time,
        ];
    }
}
