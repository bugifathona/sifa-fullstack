<?php

namespace Database\Seeders;

use App\Models\RefExitStatus;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RefExitStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Truncate tables
        RefExitStatus::truncate();

        // Create models
        $exit_statuses = [
            ['name' => 'Lulus'],
            ['name' => 'Mutasi'],
            ['name' => 'Dikeluarkan'],
            ['name' => 'Mengundurkan Diri'],
            ['name' => 'Putus Sekolah'],
            ['name' => 'Wafat'],
            ['name' => 'Hilang'],
            ['name' => 'Lainnya'],
        ];

        foreach ($exit_statuses as $exit_status) {
            RefExitStatus::create($exit_status);
        }
    }
}
