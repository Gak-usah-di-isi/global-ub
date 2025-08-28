<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Create admin user
        User::create([
            'name' => 'Admin Global UB',
            'email' => 'admin@globalub.com',
            'email_verified_at' => now(),
            'password' => Hash::make('password123'),
        ]);

        // Create test users
        User::factory(10)->create();
    }
}
