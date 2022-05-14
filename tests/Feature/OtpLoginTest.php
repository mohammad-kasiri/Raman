<?php

namespace Tests\Feature;

use App\Models\User;
use App\Models\Verification;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Tests\TestCase;

class OtpLoginTest extends TestCase
{
    use RefreshDatabase;
    public function test_otp_login_form_guest_middleware_works()
    {
        $this->assertDatabaseCount('users' , 0);
        $user = User::factory(1)->create();
        $this->assertDatabaseCount('users' , 1);
        auth()->loginUsingId($user[0]->id);
        $response = $this->get(route('otp-login.form'));
        $response->assertRedirect(route('index'));
    }

    public function test_otp_login_validation_for_mobile_works()
    {
        $invalid_mobiles = [
            ['mobile' => '0910952948', 'for' => 'register'],  // phone is short
            ['mobile' => '09859529484', 'for' => 'register'], // phone can't start with 0985
            ['mobile' => '091095294a4', 'for' => 'register'], // phone should numeric
            ['mobile' => '+9891095294', 'for' => 'register'], // phone is wrong
        ];
        foreach ($invalid_mobiles as $data) {
            $response = $this->post(route('register.submit', $data));
            $response->assertSessionHasErrors(['mobile']);
        }
    }

    public function test_otp_login_validation_for_verification_code_works()
    {
        $mobile = generatePhone();
        $this->assertDatabaseCount('users', 0);
        $user = User::factory(1)->withMobile($mobile)->create();
        $this->assertDatabaseCount('users', 1);

        $this->assertDatabaseCount('verifications', 0);

        $response = $this->post(route('otp.store'), [
            'mobile' => $mobile,
            'for' => 'login'
        ]);
        $this->assertDatabaseCount('verifications', 1);
        $this->assertDatabaseHas('verifications', ['mobile' => $mobile]);
        $response->assertCreated();

        $verification_code = Verification::query()->where('mobile', $mobile)->first();

        $response = $this->post(route('otp-login.submit'), [
            'mobile' => $mobile,
            'verification_code' => (int)$verification_code->code + 1,
        ]);

        $response->assertSessionHasErrors(['verification_code']);
        $response->assertSessionDoesntHaveErrors(['mobile']);

        $response = $this->post(route('otp-login.submit'), [
            'mobile' => $mobile,
            'verification_code' => (int)$verification_code->code,
        ]);
        $response->assertSessionDoesntHaveErrors([ 'mobile', 'verification_code']);

        $this->withoutExceptionHandling();
        $this->assertTrue(Auth::check($user));

        $response = $this->get(route('register.form'));
        $response->assertRedirect(route('index'));
    }

}
