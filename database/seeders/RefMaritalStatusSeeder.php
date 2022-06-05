<?php

namespace Database\Seeders;

use App\Models\RefMaritalStatus;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RefMaritalStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Truncate tables
        RefMaritalStatus::truncate();

        // Create models
        $marital_statuses = [
            ['name' => 'Belum Menikah'],
            ['name' => 'Sudah Menikah'],
            ['name' => 'Cerai Hidup'],
            ['name' => 'Cerai Mati'],
        ];

        foreach ($marital_statuses as $marital_status) {
            RefMaritalStatus::create($marital_status);
        }
    }
}
