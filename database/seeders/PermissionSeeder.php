<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Reset cached roles and permission
        app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();

        // truncate table
        DB::table('model_has_roles')->truncate();
        DB::table('roles')->truncate();
        DB::table('users')->truncate();

        // create roles
        $roles = [
            ['name' => 'sysadmin'],
            ['name' => 'teacher'],
            ['name' => 'admin'],
            ['name' => 'leader'],
            ['name' => 'director'],
            ['name' => 'parent'],
            ['name' => 'student'],
        ];

        foreach ($roles as $role) {
            Role::create($role);
        }
        $password = bcrypt('password');

        // create users
        $users = [
            ['username' => 'sysadmin', 'password' => $password],
            ['username' => 'teacher', 'password' => $password],
            ['username' => 'admin', 'password' => $password],
            ['username' => 'leader', 'password' => $password],
            ['username' => 'director', 'password' => $password],
            ['username' => 'parent', 'password' => $password],
            ['username' => 'student', 'password' => $password],
        ];

        foreach ($users as $item) {
            $user =  User::create($item);

            // link roles to user
            $user->assignRole($item['username']);
        }

    }
}
