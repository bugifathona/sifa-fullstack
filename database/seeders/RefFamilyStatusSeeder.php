<?php

namespace Database\Seeders;

use App\Models\RefFamilyStatus;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RefFamilyStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Truncate tables
        RefFamilyStatus::truncate();

        // Create models
        $family_statuses = [
            ['name' => 'Kandung'],
            ['name' => 'Tiri'],
            ['name' => 'Angkat'],
        ];

        foreach ($family_statuses as $family_status) {
            RefFamilyStatus::create($family_status);
        }
    }
}
