<?php

namespace Database\Seeders;

use App\Models\RefEntryYear;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RefEntryYearSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Truncate tables
        RefEntryYear::truncate();

        // Create models
        $entry_years = [
            [
                'name' => '2007',
                'start_date' => '2007-07-01',
                'end_date' => '2008-06-30'
            ],
            [
                'name' => '2008',
                'start_date' => '2008-07-01',
                'end_date' => '2009-06-30'
            ],
            [
                'name' => '2009',
                'start_date' => '2009-07-01',
                'end_date' => '2010-06-30'
            ],
            [
                'name' => '2010',
                'start_date' => '2010-07-01',
                'end_date' => '2011-06-30'
            ],
            [
                'name' => '2011',
                'start_date' => '2011-07-01',
                'end_date' => '2012-06-30'
            ],
            [
                'name' => '2012',
                'start_date' => '2012-07-01',
                'end_date' => '2013-06-30'
            ],
            [
                'name' => '2013',
                'start_date' => '2013-07-01',
                'end_date' => '2014-06-30'
            ],
            [
                'name' => '2014',
                'start_date' => '2014-07-01',
                'end_date' => '2015-06-30'
            ],
            [
                'name' => '2015',
                'start_date' => '2015-07-01',
                'end_date' => '2016-06-30'
            ],
            [
                'name' => '2016',
                'start_date' => '2016-07-01',
                'end_date' => '2017-06-30'
            ],
            [
                'name' => '2017',
                'start_date' => '2017-07-01',
                'end_date' => '2018-06-30'
            ],
            [
                'name' => '2018',
                'start_date' => '2018-07-01',
                'end_date' => '2019-06-30'
            ],
            [
                'name' => '2019',
                'start_date' => '2019-07-01',
                'end_date' => '2020-06-30'
            ],
            [
                'name' => '2020',
                'start_date' => '2020-07-01',
                'end_date' => '2021-06-30'
            ],
            [
                'name' => '2021',
                'start_date' => '2021-07-01',
                'end_date' => '2022-06-30'
            ],
            [
                'name' => '2022',
                'start_date' => '2022-07-01',
                'end_date' => '2023-06-30'
            ],
            [
                'name' => '2023',
                'start_date' => '2023-07-01',
                'end_date' => '2024-06-30'
            ],
        ];

        foreach ($entry_years as $entry_year) {
            RefEntryYear::create($entry_year);
        }
    }
}
