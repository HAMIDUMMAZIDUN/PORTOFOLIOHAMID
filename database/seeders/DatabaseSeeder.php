<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Cek apakah user test@example.com sudah ada sebelum membuat baru
        if (!User::where('email', 'test@example.com')->exists()) {
            User::factory()->create([
                'name' => 'Test User',
                'email' => 'test@example.com',
                'password' => bcrypt('password'), // password default
            ]);
        }

        // Cek apakah user admin@hacreative.com sudah ada sebelum membuat baru
        if (!User::where('email', 'admin@hacreative.com')->exists()) {
            User::factory()->create([
                'name' => 'Hamid Admin',
                'email' => 'admin@hacreative.com',
                'password' => bcrypt('password'), // password default
            ]);
        }

        $this->call([
            PortfolioSeeder::class,
            TimelineSeeder::class,
        ]);
    }
}
