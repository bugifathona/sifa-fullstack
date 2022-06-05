<?php

namespace Database\Seeders;

use App\Models\RefProfession;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RefProfessionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Truncate tables
        RefProfession::truncate();

        // Create models
        $professions =[
            ['name' => 'PNS',],
            ['name' => 'TNI/Polri',],
            ['name' => 'Guru/Dosen',],
            ['name' => 'Karyawan BUMN',],
            ['name' => 'Karyawan Swasta',],
            ['name' => 'Pedagang',],
            ['name' => 'Wirausaha',],
            ['name' => 'Pensiunan',],
            ['name' => 'Ibu Rumah Tangga',],
            ['name' => 'Lainnya',],
            ['name' => 'Tidak Bekerja',],
        ];

        foreach ($professions as $profession) {
            RefProfession::create($profession);
        }
    }
}
