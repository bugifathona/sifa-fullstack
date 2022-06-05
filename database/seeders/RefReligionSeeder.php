<?php

namespace Database\Seeders;

use App\Models\RefReligion;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RefReligionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Truncate tables
        RefReligion::truncate();

        // Create models
        $religions = [
            ['name' => 'Islam'],
            ['name' => 'Katolik'],
            ['name' => 'Protestan'],
            ['name' => 'Hindu'],
            ['name' => 'Budha'],
            ['name' => 'Konghuchu'],
            ['name' => 'Lainnya'],
        ];

        foreach ($religions as $religion) {
            RefReligion::create($religion);
        }
    }
}
