<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Student; // Tambahkan import model Student
use App\Models\User; // Tambahkan import model User
use App\Models\Role; // Tambahkan import model Role
use Illuminate\Support\Facades\Hash; // Tambahkan import untuk hashing password

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $studentRole = Role::where('name', 'student')->first();

        $user = User::create([
            'name' => 'Student User',
            'email' => 'student@example.com',
            'password' => Hash::make('password'), // Hash password
            'role_id' => $studentRole->id, // Set role_id berdasarkan role Student
        ]);

        Student::create([
            'user_id' => $user->id,
            'study_program_id' => 1, // Asumsikan study_program_id 1
            'nim' => '123456789',
            'phone' => '08123456789',
            'address' => 'Jl. Contoh No. 1',
            'profile_picture' => 'path/to/profile_picture.jpg',
        ]);
    }
}