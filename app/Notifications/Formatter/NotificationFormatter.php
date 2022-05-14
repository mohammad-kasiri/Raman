<?php

namespace App\Notifications\Formatter;

use App\Notifications\Formatter\Contract\Menu\HasMenuNotification;
use App\Notifications\Formatter\Contract\Menu\MenuNotificationOutput;
use Illuminate\Notifications\DatabaseNotification;

class NotificationFormatter
{
    public static function format(DatabaseNotification $notification): bool|MenuNotificationOutput
    {
        if (self::menuSupportsNotification($notification)) {
            return $notification->type::adminMessage($notification);
        }
        return false;
    }

    private static function menuSupportsNotification(DatabaseNotification $notification) : bool
    {
        return is_subclass_of($notification->type, HasMenuNotification::class);
    }

}
