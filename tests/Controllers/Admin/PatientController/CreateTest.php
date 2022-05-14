<?php

namespace Controllers\Admin;

use App\Http\Controllers\Admin\PatientController;
use App\Models\Province;
use App\Models\User;
use Database\Seeders\ProvinceSeeder;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;


class CreateTest extends TestCase
{
    use RefreshDatabase;

    public function test_patient_create_method_works()
    {
        [$admin] = User::factory(1)->superAdmin()->create();    // Here 1 Admin Created

        $this->seed(ProvinceSeeder::class);

        $this->actingAs($admin)->get(route('admin.patients.create'))
            ->assertViewIs('admin.users.patients.create')
            ->assertSee(Province::query()->cities()->get()->pluck('name')->toArray());

    }

}
