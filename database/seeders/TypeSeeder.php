<?php

namespace Database\Seeders;

use App\Models\Type;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Type::create([
            'id' => 1,
            'name' => 'Efectivo'
        ]);
        Type::create([
            'id' => 2,
            'name' => 'Tarjeta'
        ]);
        Type::create([
            'id' => 3,
            'name' => 'MercadoPago'
        ]);
    }
}
