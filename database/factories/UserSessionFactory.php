<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Arr;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\UserSession>
 */
class UserSessionFactory extends Factory
{
    public function definition()
    {
        return [
            'device' => 'WebKit',
            'browser' => 'chrome',
            'platform' => Arr::random(['Windows' , 'Android OS' , 'Nexus']),
            'ip_address' => rand(1,255).'.'. rand(1 , 255).'.'. rand(1 , 255).'.'. rand(1 , 255),
            'city' => '',
            'country' => '',
            'isp' => '',
            'timezone' => Arr::random(['America/Los_Angeles' ,'America/Phoenix' ,'America/Toronto' ,'Asia/Tehran' ,'Asia/Qatar']),
        ];
    }
}
