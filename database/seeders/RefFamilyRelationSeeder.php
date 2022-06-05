<?php

namespace Database\Seeders;

use App\Models\RefFamilyRelation;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RefFamilyRelationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Truncate tables
        RefFamilyRelation::truncate();

        // Create models
        $family_relations = [
            ['name' => 'Orang Tua'],
            ['name' => 'Saudara'],
            ['name' => 'Anak'],
            ['name' => 'Kakek/Nenek'],
            ['name' => 'Paman/Bibi'],
            ['name' => 'Sepupu'],
            ['name' => 'Lainnya'],
        ];

        foreach ($family_relations as $family_relation) {
            RefFamilyRelation::create($family_relation);
        }
    }
}
