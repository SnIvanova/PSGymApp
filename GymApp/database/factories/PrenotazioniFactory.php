<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\Corsi;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Prenotazioni>
 */
class PrenotazioniFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'users_id'=>User::get()->random()->id,
            'corsis_id'=>Corsi::get()->random()->id,
            'isPending'=>true,
        ];
    }
}
