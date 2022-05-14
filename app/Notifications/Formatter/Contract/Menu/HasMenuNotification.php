<?php

namespace App\Notifications\Formatter\Contract\Menu;

use Illuminate\Notifications\DatabaseNotification;

interface HasMenuNotification
{
    public static function adminMessage(DatabaseNotification $notification):MenuNotificationOutput;
}
