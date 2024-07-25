<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\StudyProgram;

class StudyProgramSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        StudyProgram::create([
            'name' => 'Teknik Informatika',
            'code' => 'TI',
            'department_id' => 1 // Sesuaikan dengan ID department yang sesuai
        ]);

        StudyProgram::create([
            'name' => 'Sistem Informasi',
            'code' => 'SI',
            'department_id' => 1 // Sesuaikan dengan ID department yang sesuai
        ]);

        StudyProgram::create([
            'name' => 'Teknik Elektro',
            'code' => 'TE',
            'department_id' => 2 // Sesuaikan dengan ID department yang sesuai
        ]);

        // Tambahkan study program lainnya sesuai kebutuhan
    }
}