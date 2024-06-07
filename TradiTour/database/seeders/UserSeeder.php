<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    public function run()
    {
        User::insert([
            [
                'username' => 'Chad Toru',
                'email' => 'chadtoru@gmail.com',
                'password' => bcrypt('cchhaadd'), 
                'role' => 'admin',
            ],
            [
                'username' => 'Steven Ardi',
                'email' => 'stevenardichristanto090103@gmail.com',
                'password' => bcrypt('09012003'), 
                'role' => 'user',
            ],
        ]);
    }
}


