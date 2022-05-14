<?php

namespace Controllers\Admin;

use App\Http\Controllers\Admin\PatientController;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;


class ShowTest extends TestCase
{
    use RefreshDatabase;

    public function test_patient_show_works()
    {
        [$admin] = User::factory(1)->superAdmin()->create();    // Here 1 Admin Created
        [$user]  = User::factory(1)->hasUserSessions(User::PROFILE_SESSION_LIMIT + 1)->hasPatient()->create(); // Here 1 User Created

        $response = $this->actingAs($admin)->get(route('admin.patients.show' , $user->id))
            ->assertSuccessful()
            ->assertViewIs('admin.users.patients.show')
            ->assertSeeInOrder([$user->full_name, $user->phone, 'اطلاعات کلی کاربر', 'سابقه نشست ها']);
    }

}
