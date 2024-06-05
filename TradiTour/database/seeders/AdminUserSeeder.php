<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class AdminUserSeeder extends Seeder
{
    public function run()
    {
        User::create([
            'username' => 'Chad Toru',
            'email' => 'chadtoru@gmail.com',
            'password' => bcrypt('cchhaadd'), 
            'role' => 'admin',
        ]);
    }
}

