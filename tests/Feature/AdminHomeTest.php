<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class AdminHomeTest extends TestCase
{
    use RefreshDatabase;

    public function test_admin_panel_auth_middleware_works()
    {
        $this->assertDatabaseCount('users' , 0);
        $user = User::factory(1)->create();
        $this->assertDatabaseCount('users' , 1);
        $response = $this->get(route('admin.index'));
        $response->assertRedirect(route('login.form'));
    }

    public function test_admin_panel_Isadmin_middleware_works()
    {
        $this->assertDatabaseCount('users' , 0);
        $user = User::factory(1)->doctor()->create();
        $this->assertDatabaseCount('users' , 1);
        $this->assertNotEquals($user[0]->level , 'admin');
        auth()->loginUsingId($user[0]->id);
        $response = $this->get(route('admin.index'));
        $response->assertNotFound();
    }
}
