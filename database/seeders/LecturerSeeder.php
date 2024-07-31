<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Lecturer; // Tambahkan import model Lecturer
use App\Models\User; // Tambahkan import model User
use App\Models\Role; // Tambahkan import model Role
use Illuminate\Support\Facades\Hash; // Tambahkan import untuk hashing password

class LecturerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $lecturerRole = Role::where('name', 'lecturer')->first();

        $user = User::create([
            'name' => 'Lecturer User',
            'email' => 'lecturer@example.com',
            'password' => Hash::make('password'), // Hash password
            'role_id' => $lecturerRole->id, // Set role_id berdasarkan role Lecturer
        ]);

        Lecturer::create([
            'user_id' => $user->id,
            'study_program_id' => 1, // Asumsikan study_program_id 1
            'nidn' => '987654321',
            'phone' => '08123456789',
            'address' => 'Jl. Contoh No. 2',
            'profile_picture' => 'path/to/profile_picture.jpg',
        ]);
    }
}