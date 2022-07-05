<?php

namespace Tests\Feature;

use App\Models\User;
use App\Models\Verification;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Tests\TestCase;

class RegisterTest extends TestCase
{
    use RefreshDatabase;

    public function test_registration_form_guest_middleware_works()
    {
        $this->assertDatabaseCount('users' , 0);
        $user = User::factory(1)->create();
        $this->assertDatabaseCount('users' , 1);
        auth()->loginUsingId($user[0]->id);
        $response = $this->get(route('register.form'));
        $response->assertRedirect(route('index'));
    }

    public function test_registration_validation_for_first_name_works()
    {
        $invalidFirstNames = [
            ["first_name" => ''],
            ["first_name" => Str::random(2)],
            ["first_name" => Str::random(16)]
        ];


        foreach ($invalidFirstNames as $data) {
            $response = $this->post(route('register.submit', $data));
            $response->assertSessionHasErrors(['first_name']);
        }

        $response = $this->post(route('register.submit', ["first_name" => Str::random(3)]));
        $response->assertSessionDoesntHaveErrors(['first_name']);
    }

    public function test_registration_validation_for_last_name_works()
    {
        $invalidlastNames = [
            ["last_name" => ''],
            ["last_name" => Str::random(2)],
            ["last_name" => Str::random(26)]
        ];
        // $this->withoutExceptionHandling();
        foreach ($invalidlastNames as $data) {
            $response =
                $this->post(
                    route('register.submit', ["first_name" => Str::random(10)] + $data)
                );
            $response->assertSessionHasErrors(['last_name']);
        }

        $response = $this->post(route('register.submit', ["first_name" => Str::random(3), 'last_name' => Str::random(3)]));
        $response->assertSessionDoesntHaveErrors(['first_name', 'last_name']);
    }

    public function test_registration_validation_for_mobile_works()
    {
        //$this->withoutExceptionHandling();
        $invalid_mobiles = [
            ['mobile' => '0910952948', 'for' => 'register'],  // phone is short
            ['mobile' => '09859529484', 'for' => 'register'], // phone can't start with 0985
            ['mobile' => '091095294a4', 'for' => 'register'], // phone should numeric
            ['mobile' => '+9891095294', 'for' => 'register'], // phone is wrong
        ];
        foreach ($invalid_mobiles as $data) {
            $response = $this->post(route('otp.store', $data));
            $response->assertSessionHasErrors(['mobile']);
        }

        $mobile = generatePhone();
        $this->assertDatabaseCount('verifications', 0);
        $response = $this->post(route('otp.store'), [
            'mobile' => $mobile,
            'for' => 'register',
        ]);
        $this->assertDatabaseCount('verifications', 1);
        $response->assertCreated();

        $this->assertDatabaseCount('users', 0);
        $user = User::factory(1)->withMobile($mobile)->create();
        $this->assertDatabaseCount('users', 1);

        $response = $this->post(route('register.submit'), [
            'first_name' => $user[0]->first_name,
            'last_name' => $user[0]->last_name,
            'mobile' => $mobile,
            'verification_code' => Verification::query()->first()->code,
            'gender' => 'male',
        ]);
        $response->assertSessionHasErrors(['mobile']);
        $this->assertDatabaseCount('users', 1);
    }

    public function test_registration_validation_for_verification_code_works()
    {
        $mobile = generatePhone();
        $this->assertDatabaseCount('verifications', 0);
        $response = $this->post(route('otp.store'), [
            'mobile' => $mobile,
            'for' => 'register'
        ]);
        $this->assertDatabaseCount('verifications', 1);
        $this->assertDatabaseHas('verifications', ['mobile' => $mobile]);
        $response->assertCreated();

        $verification_code = Verification::query()->where('mobile', $mobile)->first();

        $response = $this->post(route('register.submit'), [
            'first_name' => Str::random(3),
            'last_name' => Str::random(3),
            'mobile' => $mobile,
            'verification_code' => (int)$verification_code->code + 1,
            'gender' => 'male'
        ]);
        $response->assertSessionHasErrors(['verification_code']);
        $response->assertSessionDoesntHaveErrors(['first_name', 'last_name', 'mobile', 'gender']);

        $response = $this->post(route('register.submit'), [
            'first_name' => Str::random(3),
            'last_name' => Str::random(3),
            'mobile' => $mobile,
            'verification_code' => (int)$verification_code->code,
            'gender' => 'male'
        ]);
        $response->assertSessionDoesntHaveErrors(['first_name', 'last_name', 'mobile', 'gender', 'verification_code']);
    }

    public function test_registration_validation_for_gender_works()
    {
        $mobile = generatePhone();
        $this->assertDatabaseCount('verifications', 0);
        $this->post(route('otp.store'), [
            'mobile' => $mobile,
            'for' => 'register'
        ]);
        $this->assertDatabaseCount('verifications', 1);
        $verification_code = Verification::query()->where('mobile', $mobile)->first();

        $data = [
            'first_name' => Str::random(3),
            'last_name' => Str::random(3),
            'mobile' => $mobile,
            'verification_code' => (int)$verification_code->code,
        ];

        $invalidGenders = [
            ['gender' => 'مرد'],
            ['gender' => 'زن'],
            ['gender' => 'mle'],
        ];

        foreach ($invalidGenders as $gender) {
            $response = $this->post(route('register.submit'), $data + $gender);
            $response->assertSessionHasErrors(['gender']);
            $response->assertSessionDoesntHaveErrors(['first_name', 'last_name', 'mobile', 'verification_code']);
        }
    }

    public function test_registration_works()
    {
        $mobile = generatePhone();
        $this->assertDatabaseCount('verifications', 0);
        $this->post(route('otp.store'), [
            'mobile' => $mobile,
            'for' => 'register'
        ]);
        $this->assertDatabaseCount('verifications', 1);
        $verification_code = Verification::query()->where('mobile', $mobile)->first();

        $data = [
            'first_name' => Str::random(3),
            'last_name' => Str::random(3),
            'mobile' => $mobile,
            'verification_code' => (int)$verification_code->code,
            'gender' => 'male'
        ];

        $this->assertDatabaseCount('users', 0);
        $response = $this->post(route('register.submit'), $data);
        $this->assertDatabaseCount('users', 1);


        $user = User::query()->where('mobile' , $mobile)->first();
        $this->assertTrue(Auth::check($user));

        $response = $this->get(route('register.form'));
        $response->assertRedirect(route('index'));
    }

    public function test_send_registration_notification_works()
    {
        $this->assertDatabaseCount('users' , 0);
        $admins = User::factory(3)->admin()->create();
        $this->assertDatabaseCount('users' , 3);

        $mobile = generatePhone();
        $this->assertDatabaseCount('verifications', 0);
        $this->post(route('otp.store'), [
            'mobile' => $mobile,
            'for' => 'register'
        ]);
        $this->assertDatabaseCount('verifications', 1);
        $verification_code = Verification::query()->where('mobile', $mobile)->first();

        $data = [
            'first_name' => Str::random(3),
            'last_name' => Str::random(3),
            'mobile' => $mobile,
            'verification_code' => (int)$verification_code->code,
            'gender' => 'male'
        ];
        $this->assertDatabaseCount('notifications' , 0);
        $this->assertDatabaseCount('users', 3);
        $response = $this->post(route('register.submit'), $data);
        $this->assertDatabaseCount('users', 4);
        $this->assertDatabaseCount('notifications' , 3);

        $this->assertDatabaseHas('notifications' , [
            "type"            => "App\Notifications\NewUserRegisteredNotification",
            "read_at"         => null,
            "notifiable_type" => 'App\Models\User',
            "notifiable_id"   => $admins[0]->id,
        ]);
        $this->assertDatabaseHas('notifications' , [
            "type"            => "App\Notifications\NewUserRegisteredNotification",
            "read_at"         => null,
            "notifiable_type" => 'App\Models\User',
            "notifiable_id"   => $admins[1]->id,
        ]);
        $this->assertDatabaseHas('notifications' , [
            "type"            => "App\Notifications\NewUserRegisteredNotification",
            "read_at"         => null,
            "notifiable_type" => 'App\Models\User',
            "notifiable_id"   => $admins[2]->id,
        ]);

        auth()->loginUsingId($admins[0]->id);

        $response = $this->get(route('admin.index'));
        $response->assertSee('کاربرجدید با نام');

    }
}
