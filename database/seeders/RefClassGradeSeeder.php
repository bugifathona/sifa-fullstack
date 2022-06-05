<?php

namespace Database\Seeders;

use App\Models\RefClassGrade;
use App\Models\RefEducationLevel;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class RefClassGradeSeeder extends Seeder
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
        DB::table('ref_class_grades')->truncate();

        // Create models
        $class_grades = [
            [
                'ref_education_level_id' => RefEducationLevel::firstWhere('name', 'TK/PAUD/RA')->id,
                'name' => 'TK A',
                'alias' => 'TK A',
            ],
            [
                'ref_education_level_id' => RefEducationLevel::firstWhere('name', 'TK/PAUD/RA')->id,
                'name' => 'TK B',
                'alias' => 'TK B',
            ],
            [
                'ref_education_level_id' => RefEducationLevel::firstWhere('name', 'SD/MI')->id,
                'name' => '1',
                'alias' => 'I',
            ],
            [
                'ref_education_level_id' => RefEducationLevel::firstWhere('name', 'SD/MI')->id,
                'name' => '2',
                'alias' => 'II',
            ],
            [
                'ref_education_level_id' => RefEducationLevel::firstWhere('name', 'SD/MI')->id,
                'name' => '3',
                'alias' => 'III',
            ],
            [
                'ref_education_level_id' => RefEducationLevel::firstWhere('name', 'SD/MI')->id,
                'name' => '4',
                'alias' => 'IV',
            ],
            [
                'ref_education_level_id' => RefEducationLevel::firstWhere('name', 'SD/MI')->id,
                'name' => '5',
                'alias' => 'V',
            ],
            [
                'ref_education_level_id' => RefEducationLevel::firstWhere('name', 'SD/MI')->id,
                'name' => '6',
                'alias' => 'VI',
            ],
            [
                'ref_education_level_id' => RefEducationLevel::firstWhere('name', 'SMP/MTs')->id,
                'name' => '7',
                'alias' => 'VII',
            ],
            [
                'ref_education_level_id' => RefEducationLevel::firstWhere('name', 'SMP/MTs')->id,
                'name' => '8',
                'alias' => 'VIII',
            ],
            [
                'ref_education_level_id' => RefEducationLevel::firstWhere('name', 'SMP/MTs')->id,
                'name' => '9',
                'alias' => 'IX',
            ],
        ];

        foreach ($class_grades as $class_grade) {
            RefClassGrade::create($class_grade);
        }

        Schema::enableForeignKeyConstraints();

    }
}
