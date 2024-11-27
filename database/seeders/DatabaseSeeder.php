<?php

use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Check if the admin user already exists
        if (!User::where('email', 'admin@ehb.be')->exists()) {
            // Creating the default admin user
            User::create([
                'name' => 'Admin',
                'email' => 'admin@ehb.be',
                'password' => bcrypt('Password!321'),
                'is_admin' => true,
            ]);
        }

        // Check if the test user already exists before creating a new one
        if (!User::where('email', 'test@example.com')->exists()) {
            // Creating a test user
            User::create([
                'name' => 'Test User',
                'email' => 'test@example.com',
                'password' => bcrypt('Password!321'),
                'is_admin' => false,
            ]);
        }

        // Optionally, creating more test users using a factory
        // This ensures new users are created with unique emails
        User::factory(5)->create();  // Create 5 new users with unique emails
    }
}
