<?php

namespace App\Notifications\Formatter\Contract\Menu;

class MenuNotificationOutput
{
    public function __construct(public string $icon, public string $message, public string $time)
    {

    }

}
