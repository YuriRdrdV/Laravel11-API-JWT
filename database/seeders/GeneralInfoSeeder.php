<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\GeneralInfo;

class GeneralInfoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        GeneralInfo::create([
            'name_info' => 'John Johnes',
            'phone' => '(55) 999198889',
            'email' => 'john.Johnes@mail.com',
            'location' => 'Santa maria - RS',
        ]);

        GeneralInfo::create([
            'name_info' => 'Jesse Johnes',
            'phone' => '(55) 999198889',
            'email' => 'jesse.Johnes@mail.com',
            'location' => 'Cruz Alta - RS',
        ]);
    }
}