<?php

namespace App\Listeners;

use Jenssegers\Agent\Agent;

class GetUserSessionAfterLoginListener
{
    private Agent $agent;

    public function __construct()
    {
        $this->agent = new Agent();
    }

    public function handle($event)
    {
        $event->user->userSessions()->create([
            'device' => $this->agent->device(),
            'browser' => $this->agent->browser(),
            'platform' => $this->getPlatform(),
            'ip_address' => \request()->ip(),
            'timezone' => $this->getUserTimeZone(),
        ]);
    }

    private function getUserTimeZone(): null|string
    {
        if (!request()->has('tz') || is_null(request('tz'))){
            return null;
        }
       return base64_decode(request('tz'));
    }

    private function getPlatform()
    {
        if (!is_null($this->agent->platform())) {
            return $this->agent->platform();
        }
        if (!is_null(request()->header('sec-ch-ua-platform'))) {
            return request()->header('sec-ch-ua-platform');
        }
        return null;
    }
}
