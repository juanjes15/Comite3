<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $adminRole = Role::create(['name' => 'Administrador']);
        $permission = Permission::create(['name' => 'administrar programas']);
        $permission->assignRole($adminRole);
        $permission2 = Permission::create(['name' => 'administrar fichas']);
        $permission2->assignRole($adminRole);
        $permission3 = Permission::create(['name' => 'administrar aprendices']);
        $permission3->assignRole($adminRole);

        $adminUser = User::factory()->create([
            'email' => 'admin@admin.com',
            'password' => bcrypt('password')
        ]);
        $adminUser->assignRole('Administrador');
    }
}