<?php

namespace Database\Seeders;

use App\Models\Holes;
use Illuminate\Database\Seeder;

class HolesSeeder extends Seeder
{

    public function run()
    {
        Holes::create(['user_type' => 'ADMIN']);
        Holes::create(['user_type' => 'SECRETARIO']);
        Holes::create(['user_type' => 'BIBLIOTECARIO']);
        Holes::create(['user_type' => 'CLIENTE']);
    }
}
