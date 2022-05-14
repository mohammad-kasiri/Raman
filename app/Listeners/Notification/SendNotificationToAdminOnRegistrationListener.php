<?php

namespace App\Listeners\Notification;

use App\Models\User;
use App\Notifications\NewUserRegisteredNotification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class SendNotificationToAdminOnRegistrationListener
{
    public function handle($event)
    {
        $admins = User::query()->where('level', '=', 'admin')->get()->all();
        foreach ($admins as $admin) {
            $admin->notify(new NewUserRegisteredNotification($event->user));
        }
    }
}
