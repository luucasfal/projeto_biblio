<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{

    public function run()
    {
        $this->call(PermissionSeeder::class);
        $this->call(RolesSeeder::class);
        $this->call(PermissionToRolesSeeder::class);
    }
}
