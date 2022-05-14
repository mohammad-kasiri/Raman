<?php

namespace Controllers\Admin;

use App\Http\Controllers\Admin\PatientController;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Models\User;
use Tests\TestCase;


class IndexTest extends TestCase
{
    use RefreshDatabase;

    public function test_patient_index_works()
    {
        // Here 1 Admin Created
        [$admin] = User::factory(1)->superAdmin()->create();
        // Here N +1  Users Created
        $users = User::factory(User::PAGINATION_LIMIT + 1)->create();
        // Check To Have (N + 1 Users) + (1 Admin)
        $this->assertDatabaseCount('users', User::PAGINATION_LIMIT + 1 + 1);

        $response = $this->actingAs($admin)
                         ->get(route('admin.patients.index'))
                         ->assertViewIs('admin.users.patients.index');

        for ($i = 0; $i < User::PAGINATION_LIMIT ; $i++)
        {
            $response->assertSee($users[$i]->fullname);
            $response->assertSee($users[$i]->mobile);
        }

        $response->assertDontSee($users[User::PAGINATION_LIMIT]->full_name);
        $response->assertDontSee($users[User::PAGINATION_LIMIT]->mobile);
    }

}
