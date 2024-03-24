<?php

namespace Database\Seeders;

use App\Models\Prenotazioni;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PrenotazioniSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Prenotazioni::factory(8)->create();
    }
}
