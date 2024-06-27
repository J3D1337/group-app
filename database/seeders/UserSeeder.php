<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::factory()->create([
            'username' => 'John Doe',
            'email' => 'johndoe@gmail.com',
            'password' => bcrypt('1234'),
            'created_at' => now(),
        ]);
    }
}
