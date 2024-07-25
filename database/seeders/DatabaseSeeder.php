<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Storage;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Menghapus semua file dalam storage
        $this->deleteAllFiles();

        // Refresh migration
        Artisan::call('migrate:fresh');

        $this->call([
            RoleSeeder::class,
            UserSeeder::class,
            DepartmentSeeder::class,
            StudyProgramSeeder::class,
            LecturerSeeder::class,
            StudentSeeder::class,
        ]);
    }

    /**
     * Menghapus semua file dalam storage.
     */
    public function deleteAllFiles()
    {
        // Mengambil semua file dalam storage
        $files = Storage::allFiles();
        
        // Menghapus semua file
        foreach ($files as $file) {
            Storage::delete($file);
        }

        // Memeriksa apakah semua file berhasil dihapus
        if (empty(Storage::allFiles())) {
            echo "Semua file dalam storage berhasil dihapus.\n";
        } else {
            echo "Gagal menghapus file dalam storage.\n";
        }
    }
}