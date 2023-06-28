<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run()
    {
        User::create([
            'username' => 'alangalea',
            'first_name' => 'Alan',
            'last_name' => 'Galeano',
            'email' => 'alangalea@gmail.com',
            'password' => Hash::make('admin'),
            'role_id' => 1
        ]);
    }
}
