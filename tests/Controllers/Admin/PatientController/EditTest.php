<?php

namespace Controllers\Admin;

use App\Http\Controllers\Admin\PatientController;
use App\Models\Province;
use App\Models\User;
use Database\Seeders\ProvinceSeeder;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;


class EditTest extends TestCase
{
    use RefreshDatabase;

    public function test_patient_edit_method_works()
    {
        [$admin] = User::factory(1)->superAdmin()->create();    // Here 1 Admin Created
        [$user] = User::factory(1)->hasPatient(1)->create();    // Here 1 User Created

        $this->seed(ProvinceSeeder::class);

        $this->actingAs($admin)->get(route('admin.patients.edit' , $user->id))
            ->assertViewIs('admin.users.patients.edit')
            ->assertSee(Province::query()->cities()->get()->pluck('name')->toArray())
            ->assertSee([$user->full_name , $user->mobile]);
    }

}
