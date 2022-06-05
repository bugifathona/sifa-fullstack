<?php

namespace Database\Seeders;

use App\Models\RefEntryStatus;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RefEntryStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Truncate tables
        RefEntryStatus::truncate();

        // Create models
        $entry_statuses = [
            ['name' => 'Siswa Baru'],
            ['name' => 'Pindahan'],
            ['name' => 'Kembali Bersekolah'],
        ];

        foreach ($entry_statuses as $entry_status) {
            RefEntryStatus::create($entry_status);
        }
    }
}
