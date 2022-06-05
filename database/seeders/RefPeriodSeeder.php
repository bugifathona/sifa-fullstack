<?php

namespace Database\Seeders;

use App\Models\RefPeriod;
use App\Models\RefPeriodType;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RefPeriodSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Truncate tables
        RefPeriod::truncate();

        // Create models
        $periods = [
            [
                'ref_period_type_id' => RefPeriodType::firstWhere('name', 'Semester')->id,
                'name' => '1',
                'alias' => 'Ganjil'
            ],
            [
                'ref_period_type_id' => RefPeriodType::firstWhere('name', 'Semester')->id,
                'name' => '2',
                'alias' => 'Genap'
            ],
        ];

        foreach ($periods as $period) {
            RefPeriod::create($period);
        }
    }
}
