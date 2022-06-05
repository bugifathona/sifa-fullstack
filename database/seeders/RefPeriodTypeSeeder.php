<?php

namespace Database\Seeders;

use App\Models\RefPeriodType;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RefPeriodTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Truncate tables
        RefPeriodType::truncate();

        // Create models
        $period_types = [
            [
                'name' => 'Tahunan',
                'name_english' =>'Annually'
            ],
            [
                'name' => 'Semester',
                'name_english' => 'Semester'
            ],
            [
                'name' => 'Triwulan',
                'name_english' => 'Quarterly'
            ],
            [
                'name' => 'Bulanan',
                'name_english' => 'Monthly'
            ],
            [
                'name' => 'Mingguan',
                'name_english' => 'Weekly'
            ],
            [
                'name' => 'Harian',
                'name_english' => 'Daily'
            ],
        ];

        foreach ($period_types as $period_type) {
            RefPeriodType::create($period_type);
        }
    }
}
