<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use Spatie\Permission\Models\Role;

class RolesSeeder extends Seeder
{

    public function run()
    {
        Role::create(['Name' => 'CLIENTE']);
        Role::create(['Name' => 'SECRETARIO']);
        Role::create(['Name' => 'BLIBIOTECARIO']);
        Role::create(['Name' => 'ADMIN']);

    }
}
