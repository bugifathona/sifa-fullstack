<?php

namespace Database\Seeders;

use App\Models\RefBranch;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RefBranchSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Truncate tables
        RefBranch::truncate();

        // Create models
        $branches = [
            [
                'name' => 'Baturaja',
                'number_code' => '01',
                'alpha_code' => 'BTA',
                'address' => 'Jl. Nawawi Al-Hajj, Jembatan Ogan IV',
                'subdistrict' => 'Ds. Tanjung Baru',
                'district' => 'Kec. Baturaja Timur',
                'city' => 'Kab. OKU',
                'province' => 'Sumatera Selatan',
                'phone' => '',
                'email' => 'sitfathonabta@gmail.com',
                'is_active' => True,
            ],
            [
                'name' => 'Maskarebet',
                'number_code' => '02',
                'alpha_code' => 'PLG',
                'address' => 'Jl. Jepang RT. 36 RW. 11, Maskarebet',
                'subdistrict' => 'Kel. Karya Baru',
                'district' => 'Kec. Alang-Alang Lebar',
                'city' => 'Kota Palembang',
                'province' => 'Sumatera Selatan',
                'phone' => '',
                'email' => 'sitfathonaplg@gmail.com',
                'is_active' => True,
            ],
            [
                'name' => 'Prabumulih',
                'number_code' => '03',
                'alpha_code' => 'PBM',
                'address' => 'Jl. Sumatera Lrg. Mangga RT. 08 RW. 04',
                'subdistrict' => 'Kel. Gunung Ibul',
                'district' => 'Kec. Prabumulih Timur',
                'city' => 'Kota Prabumulih',
                'province' => 'Sumatera Selatan',
                'phone' => '',
                'email' => '',
                'is_active' => True,
            ],
            [
                'name' => 'Lemabang',
                'number_code' => '04',
                'alpha_code' => 'LMB',
                'address' => 'Jl. Ratu Sianum, Ruko Blok A1',
                'subdistrict' => 'Kel. 3 Ilir',
                'district' => 'Kec. Ilir Timur II',
                'city' => 'Kota Palembang',
                'province' => 'Sumatera Selatan',
                'phone' => '',
                'email' => '',
                'is_active' => True,
            ],
            [
                'name' => 'Pakjo',
                'number_code' => '05',
                'alpha_code' => 'PKJ',
                'address' => 'Jl. Inspektur Marzuki No. 124',
                'subdistrict' => 'Kel. Siring Agung',
                'district' => 'Kec. Ilir Barat I',
                'city' => 'Kota Palembang',
                'province' => 'Sumatera Selatan',
                'phone' => '',
                'email' => '',
                'is_active' => True,
            ],
            [
                'name' => 'Kepahiang',
                'number_code' => '06',
                'alpha_code' => 'KPH',
                'address' => '',
                'subdistrict' => '',
                'district' => '',
                'city' => '',
                'province' => 'Bengkulu',
                'phone' => '',
                'email' => '',
                'is_active' => True,
            ],
            [
                'name' => 'Lubuklinggau',
                'number_code' => '07',
                'alpha_code' => 'LLG',
                'address' => 'Jl. Yos Sudarso',
                'subdistrict' => 'Kel. Batu Urip Taba',
                'district' => 'Lubuklinggau Timur',
                'city' => 'Kota Lubuklinggau',
                'province' => 'Sumatera Selatan',
                'phone' => '',
                'email' => '',
                'is_active' => True,
            ],
        ];

        foreach ($branches as $branch) {
            RefBranch::create($branch);
        }

    }
}
