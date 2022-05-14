<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\UserSession;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call(ProvinceSeeder::class);
        $this->call(MartialStatusSeeder::class);
        $this->call(CareerSeeder::class);

        User::factory(1)->superAdmin()->hasUserSessions(10)->create();
        User::factory()->count(20)->doctor()->hasUserSessions(10)->create();
        User::factory(100)->hasUserSessions(10)->hasPatient(1)->create();
    }
}
