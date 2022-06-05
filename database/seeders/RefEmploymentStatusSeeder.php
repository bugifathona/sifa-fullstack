<?php

namespace Database\Seeders;

use App\Models\RefEmploymentStatus;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RefEmploymentStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Truncate tables
        RefEmploymentStatus::truncate();

        // Create models
        $employment_statuses = [
            ['name' => 'Observasi'],
            ['name' => 'Magang'],
            ['name' => 'Pengganti'],
            ['name' => 'GTTY'],
            ['name' => 'GTY'],
            ['name' => 'PNS'],
        ];

        foreach ($employment_statuses as $employment_status) {
            RefEmploymentStatus::create($employment_status);
        }
    }
}
