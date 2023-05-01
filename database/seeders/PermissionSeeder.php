<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermissionSeeder extends Seeder
{

    public function run()
    {
        Permission::create(['name' => 'livros-index']);
        Permission::create(['name' => 'livros-create']);
        Permission::create(['name' => 'livros-edit']);
        Permission::create(['name' => 'livros-show']);
    }
}
