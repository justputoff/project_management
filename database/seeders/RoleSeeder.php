<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Role::create([
            'name' => 'Admin',
            'description' => 'Administrator with full access'
        ]);

        Role::create([
            'name' => 'Lecturer',
            'description' => 'Lecturer with access to manage courses and students'
        ]);

        Role::create([
            'name' => 'Student',
            'description' => 'Student with access to enroll in courses and view content'
        ]);

        // Tambahkan role lainnya sesuai kebutuhan
    }
}