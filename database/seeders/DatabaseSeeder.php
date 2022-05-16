<?php

namespace Database\Seeders;

use App\Models\Permission;
use App\Models\Role;
use App\Models\User;
use App\Models\UserSession;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call(ProvinceSeeder::class);
        $this->call(MartialStatusSeeder::class);
        $this->call(CareerSeeder::class);
        $this->call(PermissionSeeder::class);

        Role::factory()->fullAdmin()->create();
        User::factory(1)->superAdmin()->hasUserSessions(10)->create();
        User::factory()->count(20)->doctor()->hasUserSessions(10)->create();
        User::factory(100)->hasUserSessions(10)->hasPatient(1)->create();


        DB::table('role_user')->insert(['user_id' => 1 , 'role_id' => 1]);
        $permissions = Permission::query()->select('id')->get()->pluck('id');
        foreach ($permissions as $permission) {
            DB::table('permission_role')->insert(['role_id' => 1 , 'permission_id'=> $permission]);
        }

    }
}
