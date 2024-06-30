<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;


class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::factory()->create([
            'username' => 'Master Admin',
            'email' => 'admin@admin.com',
            'password' => bcrypt('password'), // create password in ''
            'role' => 'admin',
            'created_at' => now(),
        ]);
    }
}
