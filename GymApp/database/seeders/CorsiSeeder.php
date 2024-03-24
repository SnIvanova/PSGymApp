<?php

namespace Database\Seeders;

use App\Models\Corsi;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CorsiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Corsi::factory()->count(10)->create();
    }
}
