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
        $this->call(DegreeSeeder::class);
        $this->call(StudyFieldSeeder::class);
        $this->call(PermissionSeeder::class);
        $this->call(StudyFieldSeeder::class);
        $this->call(SubjectSeeder::class);
        Role::factory()->fullAdmin()->create();

        User::factory()->superAdmin()->hasUserSessions(10)->create();
        User::factory()->count(5)->doctor()->hasUserSessions(10)->hasDoctor(1)->create();
        User::factory()->count(100)->hasUserSessions(10)->hasPatient(1)->create();


        $this->makeFullAccessAdmin(1);
    }

    public  function makeFullAccessAdmin(array|int $forUser = 1)
    {
        $permissions = Permission::query()->select('id')->get()->pluck('id');
        foreach ($permissions as $permission) {
            DB::table('permission_role')->insert(['role_id' => 1, 'permission_id' => $permission]);
        }

        if (is_int($forUser)) {
            DB::table('role_user')->insert(['user_id' => $forUser, 'role_id' => 1]);
        }

        if (is_array($forUser)) {
            foreach ($forUser as $user)
            {
                DB::table('role_user')->insert(['user_id' => $user, 'role_id' => 1]);
            }
        }
    }
}
