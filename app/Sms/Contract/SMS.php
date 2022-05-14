<?php


namespace App\Sms\Contract;


interface SMS
{
    public function send($receptor , $message);
    public function sendLookUp($receptor);
}
