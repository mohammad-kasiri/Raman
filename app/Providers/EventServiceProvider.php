<?php

namespace App\Providers;

use App\Events\NewUserRegisteredEvent;
use App\Listeners\GetUserSessionAfterLoginListener;
use App\Listeners\Notification\SendNotificationToAdminOnRegistrationListener;
use App\Listeners\UpdateUserLastLoginAfterUserLogedinListener;
use App\Models\Patient;
use App\Models\User;
use App\Models\Verification;
use App\Observers\PatientObserver;
use App\Observers\VerificationObserver;
use Illuminate\Auth\Events\Registered;
use Illuminate\Auth\Listeners\SendEmailVerificationNotification;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Event;

class EventServiceProvider extends ServiceProvider
{

    protected $listen = [
        \Illuminate\Auth\Events\Login::class => [
            GetUserSessionAfterLoginListener::class,
            UpdateUserLastLoginAfterUserLogedinListener::class,
        ],
        NewUserRegisteredEvent::class=>[
            SendNotificationToAdminOnRegistrationListener::class
        ]
    ];


    public function boot()
    {
        Verification::observe(VerificationObserver::class);
        Patient::observe(PatientObserver::class);
    }


    public function shouldDiscoverEvents()
    {
        return false;
    }
}
