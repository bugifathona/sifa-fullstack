<?php

namespace Database\Seeders;

use App\Models\RefEmploymentType;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RefEmploymentTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Truncate tables
        RefEmploymentType::truncate();

        // Create models
        $employment_types = [
            ['name' => 'Akademis'],
            ['name' => 'Administrasi'],
            ['name' => 'Staf Lainnya'],
        ];

        foreach ($employment_types as $employment_type) {
            RefEmploymentType::create($employment_type);
        }
    }
}
