<?php

namespace Database\Seeders;

use App\Models\Gender;
use Illuminate\Database\Seeder;

class GenderSeeder extends Seeder
{
    public function run()
    {
        $genders = [
            ['name' => 'Fermale'],
            ['name' => 'Male'],
        ];

        foreach ($genders as $gender) {
            Gender::create($gender);
        }
    }
}
