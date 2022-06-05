<?php

namespace Database\Seeders;

use App\Models\RefGender;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RefGenderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Truncate tables
        RefGender::truncate();

        // Create models
        $genders = [
            [
                'name' => 'Laki-laki',
                'name_english' => 'Male',
                'name_arabic' => 'Ikhwan',
            ],
            [
                'name' => 'Perempuan',
                'name_english' => 'Female',
                'name_arabic' => 'Akhwat',
            ],
        ];

        foreach ($genders as $gender) {
            RefGender::create($gender);
        }
    }
}
