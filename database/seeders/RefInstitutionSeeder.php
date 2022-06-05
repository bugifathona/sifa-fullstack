<?php

namespace Database\Seeders;

use App\Models\RefInstitution;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RefInstitutionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Truncate tables
        RefInstitution::truncate();

        // Create models
        $institutions = [
            ['name' => 'Pemerintah Pusat'],
            ['name' => 'Pemerintah Provinsi'],
            ['name' => 'Pemerintah Kab/Kota'],
            ['name' => 'Pemerintah Yayasan'],
            ['name' => 'Kepala Sekolah'],
            ['name' => 'Komite Sekolah'],
            ['name' => 'Lainnya'],
        ];

        foreach ($institutions as $institution) {
            RefInstitution::create($institution);
        }
    }
}
