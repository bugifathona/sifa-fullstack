<?php

namespace Database\Seeders;

use App\Models\RefStifin;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RefStifinSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Truncate tables
        RefStifin::truncate();

        // Create models
        $stifins = [
            [
                'name' => 'Sensing introvert',
                'code' => 'Si',
            ],
            [
                'name' => 'Sensing extrovert',
                'code' => 'Se',
            ],
            [
                'name' => 'Thinking introvert',
                'code' => 'Ti',
            ],
            [
                'name' => 'Thinking extrovert',
                'code' => 'Te',
            ],
            [
                'name' => 'Intuiting introvert',
                'code' => 'Ii',
            ],
            [
                'name' => 'Intuiting extrovert',
                'code' => 'Ie',
            ],
            [
                'name' => 'Feeling introvert',
                'code' => 'Fi',
            ],
            [
                'name' => 'Feeling extrovert',
                'code' => 'Fe',
            ],
            [
                'name' => 'Insting',
                'code' => 'In',
            ],
        ];

        foreach ($stifins as $stifin) {
            RefStifin::create($stifin);
        }
    }
}
