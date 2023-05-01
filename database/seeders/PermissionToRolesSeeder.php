<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class PermissionToRolesSeeder extends Seeder
{

    public function run()
    {
        $cliente = Role::where('id','1')->get()->first();

        $secreatario =Role::where('id','2')->get()->first();

        $bibliotecario =Role::where('id','3')->get()->first();

        $admin = Role::where('id','4')->get()->first();
        $admin->syncPermissions(Permission::all());
    }
}
