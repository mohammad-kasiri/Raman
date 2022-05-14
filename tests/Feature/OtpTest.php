<?php

namespace Tests\Feature;


use App\Models\User;
use App\Models\Verification;
use Carbon\Carbon;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class OtpTest extends TestCase
{
    use RefreshDatabase;

    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_otp_validation_mobile_format_works()
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
    }

    public function test_otp_validation_for_format_works()
    {

        $invalid_for = [
            ['mobile' => '09109529484', 'for' => 'asd'],
            ['mobile' => '09109529484', 'for' => 'log'],
        ];
        foreach ($invalid_for as $data) {
            $response = $this->post(route('otp.store', $data));
            $response->assertSessionHasErrors(['for']);
        }
    }

    public function test_otp_validation_mobile_uniqueness_works()
    {
        $sampleMobile = generatePhone();
        User::factory(1)->withMobile($sampleMobile)->create();

        //-----------Should Be Unique For Registeration
        $response = $this->post(route('otp.store', [
            'mobile' => $sampleMobile,
            'for' => 'register'
        ]));
        $response->assertSessionHasErrors(['mobile']);

        $response = $this->post(route('otp.store', [
            'mobile' => '09109529484',
            'for' => 'register'
        ]));
        $response->assertSessionDoesntHaveErrors(['mobile']);  //With Uniqe Mobile Session Does Not Have Error


        //----------Should Not Be Unique For Login
        $response = $this->post(route('otp.store', [
            'mobile' => $sampleMobile,
            'for' => 'login'
        ]));
        $response->assertSessionDoesntHaveErrors(['mobile']);  //For Existing Mobile Session Does Not Have Error


        $response = $this->post(route('otp.store', [
            'mobile' => '09907887787',
            'for' => 'login'
        ]));
        $response->assertSessionHasErrors(['mobile']);   //When Mobile Does Not Exists We Have Error
    }

    public function test_otp_validation_avoid_repetitive_code_works()
    {
        $sampleMobile = generatePhone();;
        $response = $this->post(route('otp.store', [
            'mobile' => $sampleMobile,
            'for' => 'register'
        ]));
        $response->assertSessionDoesntHaveErrors(['mobile']);
        $this->assertDatabaseCount('verifications', 1);


        $response = $this->post(route('otp.store', [
            'mobile' => $sampleMobile,
            'for' => 'login'
        ]));
        $response->assertSessionHasErrors(['mobile']);

        $this->assertDatabaseCount('verifications', 1);

        $response = $this->post(route('otp.store', [
            'mobile' => $sampleMobile,
            'for' => 'login'
        ]));
        $response->assertSessionHasErrors(['mobile']);

        $this->assertDatabaseCount('verifications', 1);
    }

    public function test_otp_works()
    {
        $sampleMobile = generatePhone();;
        $this->assertDatabaseCount('verifications', 0);
        $response = $this->post(route('otp.store', [
            'mobile' => $sampleMobile,
            'for' => 'register'
        ]));
        $this->assertDatabaseCount('verifications', 1);
        $this->assertDatabaseHas('verifications',[
            'mobile' => $sampleMobile,
        ]);
        $response->assertStatus(201);
        $response->assertJson([
            'verification_code' => __('auth.otp.messages.successful')
        ]);
    }
}
