<?php

namespace Admin;

use App\Models\Province;
use App\Models\User;
use Database\Seeders\ProvinceSeeder;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\Functions\FullAdmin;
use Tests\TestCase;

class PatientControllerTest extends TestCase
{
    use RefreshDatabase;

    public function test_patient_index_works()
    {
        // Here 1 Admin Created
        $admin = FullAdmin::make();
        $this->assertTrue($admin->can('patients'));
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

    public function test_patient_show_works()
    {
        $admin = FullAdmin::make();    // Here 1 Admin Created
        [$user]  = User::factory(1)->hasUserSessions(User::PROFILE_SESSION_LIMIT + 1)->hasPatient()->create(); // Here 1 User Created

        $response = $this->actingAs($admin)->get(route('admin.patients.show' , $user->id))
            ->assertSuccessful()
            ->assertViewIs('admin.users.patients.show')
            ->assertSeeInOrder([$user->full_name, $user->phone, 'اطلاعات کلی کاربر', 'سابقه نشست ها']);
    }
    public function test_patient_create_method_works()
    {
        $admin = FullAdmin::make();    // Here 1 Admin Created

        $this->seed(ProvinceSeeder::class);

        $this->actingAs($admin)->get(route('admin.patients.create'))
            ->assertViewIs('admin.users.patients.create')
            ->assertSee(Province::query()->cities()->get()->pluck('name')->toArray());

    }
    public function test_patient_store_method_works()
    {
        $this->assertDatabaseCount('users' , 0);
        $admin = FullAdmin::make();
        $this->assertDatabaseCount('users' , 1);

        $data = [
            'first_name'      => 'mohammad' ,
            'last_name'       => 'kasiri' ,
            'mobile'          => generatePhone() ,
            'gender'          => generateGender(),
            'email'           => generateEmail(),
            'city_id'         => generateCityId(),
        ];
        $response = $this->actingAs($admin)->post(route('admin.patients.store') , $data);
        $response->assertRedirect(route('admin.patients.index'));
        $this->assertDatabaseCount('users' , 2);
        /*
         *      [ user table --> patient table ]=> one to one relationship
         */
        $this->assertDatabaseCount('patients' , 1);
    }
    public function test_patient_edit_method_works()
    {
        $admin = FullAdmin::make();    // Here 1 Admin Created
        $user = User::factory()->hasPatient(1)->create();    // Here 1 User Created

        $this->seed(ProvinceSeeder::class);

        $this->actingAs($admin)->get(route('admin.patients.edit' , $user->id))
            ->assertViewIs('admin.users.patients.edit')
            ->assertSee(Province::query()->cities()->get()->pluck('name')->toArray())
            ->assertSee([$user->full_name , $user->mobile]);
    }
//    public function test_patient_update_method_works()
//    {
//
//    }
}
