<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    public function run()
    {
        Role::create([
            'role_name' => 'Administrador',
        ]);
        Role::create([
            'role_name' => 'Peluquero',
        ]);
    }
}
