<?php

namespace Database\Seeders;

use App\Models\Registry;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RegistrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Registry::create([
            'id' => 1,
            'detail' => 'prueba',
            'amount' => 2000,
            'registry_date' => '2023-01-30',
            'user_loader' => 'Alan Rotela',
            'type_id' => 3,
            'user_id' => 1
        ]);
    }
}
