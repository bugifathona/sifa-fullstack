<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        Schema::disableForeignKeyConstraints();

        $this->call([
            PermissionSeeder::class,
            RefBranchSeeder::class,
            RefEducationLevelSeeder::class,
            RefClassGradeSeeder::class,
            RefPeriodTypeSeeder::class,
            RefPeriodSeeder::class,
            RefGenderSeeder::class,
            RefStifinSeeder::class,
            RefEmploymentStatusSeeder::class,
            RefEmploymentTypeSeeder::class,
            RefEntryStatusSeeder::class,
            RefEntryYearSeeder::class,
            RefExitStatusSeeder::class,
            RefFamilyRelationSeeder::class,
            RefFamilyStatusSeeder::class,
            RefInstitutionSeeder::class,
            RefMaritalStatusSeeder::class,
            RefProfessionSeeder::class,
            RefReligionSeeder::class,
            RefSalarySourceSeeder::class,
            RefSchoolYearSeeder::class,
        ]);

        Schema::enableForeignKeyConstraints();
    }
}
