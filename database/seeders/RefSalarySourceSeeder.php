<?php

namespace Database\Seeders;

use App\Models\RefSalarySource;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RefSalarySourceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Truncate tables
        RefSalarySource::truncate();

        // Create models
        $salary_sources = [
            ['name' => 'APBN'],
            ['name' => 'APBD Provinsi'],
            ['name' => 'APBD Kab/Kota'],
            ['name' => 'Yayasan'],
            ['name' => 'Sekolah'],
            ['name' => 'Lembaga Donor'],
            ['name' => 'Lainnya'],
        ];

        foreach ($salary_sources as $salary_source) {
            RefSalarySource::create($salary_source);
        }
    }
}
