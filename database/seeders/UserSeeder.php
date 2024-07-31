<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User; // Tambahkan import model User
use App\Models\Role; // Tambahkan import model Role
use Illuminate\Support\Facades\Hash; // Tambahkan import untuk hashing password

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $adminRole = Role::where('name', 'admin')->first();

        User::create([
            'name' => 'Admin User',
            'email' => 'admin@example.com',
            'password' => Hash::make('password'), // Hash password
            'role_id' => $adminRole->id, // Set role_id berdasarkan role Admin
        ]);
    }
}