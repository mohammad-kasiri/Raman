<?php

namespace App\Providers;

use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;

class DirectiveServiceProvider extends ServiceProvider
{
    public function boot()
    {
        Blade::directive('timezone', function () {
            return "<input type='hidden' name='tz'>";
        });

        //if  logged in user is an admin             => @admin      |    @endadmin
        Blade::if('admin', function () {
            return auth()->check() && auth()->user()->level == "admin";
        });

        //if logged in user is just a simple user    => @user      |    @enduser
        Blade::if('user', function () {
            return auth()->check() && auth()->user()->level == "user";
        });
    }
}
