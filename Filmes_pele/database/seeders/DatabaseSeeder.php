<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        // Crie as permissões
        Permission::create(['name' => 'admin']);
        Permission::create(['name' => 'user']);

        // Crie as funções (roles)
        $adminRole = Role::create(['name' => 'admin']);
        $userRole = Role::create(['name' => 'user']);

        // Atribua as permissões às funções
        $adminRole->givePermissionTo('admin');
        $userRole->givePermissionTo('user');
    }
}
