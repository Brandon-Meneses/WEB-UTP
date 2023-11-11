<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory()->create([
            'is_admin' => true,
            'name' => 'admin',
            'email' => 'admin@admin.com',
            'password' => bcrypt('admin'),
        ]);

        User::factory()->create([
            'name' => 'Test-1',
            'email' => 'test1@test.com',
            'password' => bcrypt('test'),
        ]);

        User::factory()->create([
            'name' => 'Test-2',
            'email' => 'test2@test.com',
            'password' => bcrypt('test'),
        ]);        
        


    }
}
