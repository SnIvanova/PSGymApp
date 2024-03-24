<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

         User::factory()->create([
             'isAdmin' => true,
            'name' => 'Admin',
            'email' => 'admin@example.com',
            'password' => Hash::make('Pa$$w0rd!')
        ]);

        $this->call([
             UserSeeder::class,
            CorsiSeeder::class,
            PrenotazioniSeeder::class
        ]);
    }
}
