<?php

namespace Database\Seeders;

use App\Models\RefEducationLevel;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class RefEducationLevelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Truncate tables
        Schema::disableForeignKeyConstraints();
        DB::table('ref_education_levels')->truncate();

        // Create models
        $education_levels = [
            [
                'name' => 'Lainnya',
                'number_code' => '00'
            ],
            [
                'name' => 'TK/PAUD/RA',
                'number_code' => '01',
            ],
            [
                'name' => 'SD/MI',
                'number_code' => '02',
            ],
            [
                'name' => 'SMP/MTs',
                'number_code' => '03',
            ],
            [
                'name' => 'SMA/SMK',
                'number_code' => '04',
            ],
            [
                'name' => 'D1',
                'number_code' => '05',
            ],
            [
                'name' => 'D2',
                'number_code' => '06',
            ],
            [
                'name' => 'D3',
                'number_code' => '07',
            ],
            [
                'name' => 'D4',
                'number_code' => '08',
            ],
            [
                'name' => 'S1',
                'number_code' => '09',
            ],
            [
                'name' => 'S2',
                'number_code' => '10',
            ],
            [
                'name' => 'S3',
                'number_code' => '11',
            ],
        ];

        foreach ($education_levels as $education_level) {
            RefEducationLevel::create($education_level);
        }

        Schema::enableForeignKeyConstraints();
    }
}
