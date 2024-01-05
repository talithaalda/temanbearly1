<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Talitha Alda',
            'username' => 'talithaalda',
            'email' => 'talithaalda@gmail.com',
            'level' => 'User',
            'password' => bcrypt('12345'),
        ]);
        User::create([
            'name' => 'Admin',
            'username' => 'admin',
            'email' => 'admin@gmail.com',
            'level' => 'Admin',
            'password' => bcrypt('admin'),
        ]);
    }
}
