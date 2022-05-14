<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Tests\TestCase;

class LoginTest extends TestCase
{
    use RefreshDatabase;

    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_login_form_works()
    {
        $response = $this->get(route('login.form'));
        $response->assertStatus(200);
        $response->assertViewIs('auth.login.login');
        $response->assertSeeInOrder([
            __('auth.login.view.title') ,
            __('auth.login.view.subtitle') ,
            __('auth.login.view.username_placeholder') ,
            __('auth.login.view.remember'),
            __('auth.login.view.registration_offer'),
            ], $escaped = false);
    }

    public function test_login_form_guest_middleware_works()
    {
        $this->assertDatabaseCount('users' , 0);
        $user = User::factory(1)->create();
        $this->assertDatabaseCount('users' , 1);
        auth()->loginUsingId($user[0]->id);
        $response = $this->get(route('login.form'));
        $response->assertRedirect(route('index'));
    }

    public function test_username_validation_work()
    {
        $invalid_usernames = [
            ['username' => '']    ,                     // Empty value
            ['username' => 'ali'] ,                     // min : 9
            ['username' => '09109529'],                 // min : 9
            ['username' => Str::random(61)] ,    // max : 60
        ];
        foreach ($invalid_usernames as $invalid_username) {
            $response = $this->post(route('login.submit', $invalid_username));
            $response->assertSessionHasErrors(['username']);
            $response->assertStatus(Response::HTTP_FOUND);
        }

        $valid_usernames = [
            ['username' => '09109529484']    ,
            ['username' => 'mohammad@gmail.com'] ,
        ];
        foreach ($valid_usernames as $valid_username) {
            $response = $this->post(route('login.submit', $valid_username));
            $response->assertSessionDoesntHaveErrors(['username']);
        }
    }

    public function test_password_validation_work()
    {
        $invalid_passwords = [
            ['username' => '09109529484' , 'password' => Str::random(5)],  // min:6
            ['username' => '09109529484' , 'password' => '' ],                    //required
            ['username' => '09109529484' , 'password' => Str::random(61)], //max:60
        ];

        foreach ($invalid_passwords as $invalid_password) {
            $response = $this->post(route('login.submit', $invalid_password));
            $response->assertSessionHasErrors(['password']);
            $response->assertStatus(Response::HTTP_FOUND);
        }
    }

    public function test_login_throttle_works()
    {
        for ($i = 1 ; $i <= 6 ; $i++) {
            $response = $this->post(route('login.submit'));
            $response->assertStatus(Response::HTTP_FOUND);
        }

        $response = $this->post(route('login.submit'));
        $response->assertStatus(Response::HTTP_TOO_MANY_REQUESTS);
    }

    public function test_can_login_successfull_with_correct_username_and_password(){
        $samplePassword = '11111111';
        $user = User::factory()->withPassword($samplePassword)->create();

        $data =  ['username' => $user->mobile , 'password' => 'wrong_password'];
        $response = $this->post(route('login.submit', $data));
        $response->assertSessionHasErrors(['password']);

        $data =  ['username' => $user->mobile , 'password' => $samplePassword];
        $response = $this->post(route('login.submit', $data));
        $response->assertSessionDoesntHaveErrors(['password']);

        $this->assertTrue(Auth::check($user));

        $response = $this->get(route('register.form'));
        $response->assertRedirect(route('index'));
    }
}
