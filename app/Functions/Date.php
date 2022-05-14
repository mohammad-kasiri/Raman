<?php

namespace App\Functions;

use Illuminate\Support\Carbon;
use Morilog\Jalali\CalendarUtils;

class Date
{
    public static $seprator = '/';

    public static function seprator(string $separator)
    {
        static::$seprator = $separator;
        return static::class;
    }

    public static function format(null|string $date)
    {
        if (is_null($date)) return null;

        $date = explode(static::$seprator , $date);
        $date = CalendarUtils::toGregorian($date[0], $date[1], $date[2]);
        return Carbon::create($date[0], $date[1], $date[2], 00, 00);
    }

}
