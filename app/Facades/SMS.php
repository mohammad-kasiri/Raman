<?php
namespace App\Facades;

use Illuminate\Support\Facades\Facade;

class SMS extends Facade
{
    protected static function getFacadeAccessor()
    {
        $sms_panels = [
            "kavenegar"  => \App\Sms\Kavenegar::class,
            "sms_ir"     => \App\Sms\Sms_ir::class,
        ];

        return  $sms_panels[config('sms.default')];
    }
}
