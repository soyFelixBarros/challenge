<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    public function run()
    {
        $users = [
            [
                'name' => 'Admin',
                'email' => 'admin@gmail.com.ar',
                'password' => bcrypt('123456')]
        ];

        foreach ($users as $user) {
            User::create($user);
        }
    }
}
