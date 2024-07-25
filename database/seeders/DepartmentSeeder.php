<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Department;

class DepartmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Department::create([
            'name' => 'Teknik Informatika',
            'code' => 'TI'
        ]);

        Department::create([
            'name' => 'Sistem Informasi',
            'code' => 'SI'
        ]);

        Department::create([
            'name' => 'Teknik Elektro',
            'code' => 'TE'
        ]);
    }
}