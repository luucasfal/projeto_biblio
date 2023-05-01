<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class RolesSeeder extends Seeder
{

    public function run()
    {

        Role::create(['name' => 'CLIENTE']);
        Role::create(['name' => 'SECRETARIO']);
        Role::create(['name' => 'BLIBIOTECARIO']);
        Role::create(['name' => 'ADMIN']);

    }
}
