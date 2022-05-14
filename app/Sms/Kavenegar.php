<?php


namespace App\Sms;


use App\Sms\Contract\Methods;
use App\Sms\Contract\SMS;
use Http;


class Kavenegar  implements  SMS
{
    private $template = "auth";
    private $address;
    private $lookup_address;
    private $tokens = [];

    public function __construct()
    {
        $this->address         = config("sms.services.kavenegar.address");
        $this->lookup_address  = config("sms.services.kavenegar.lookup_address");
    }

    public function template($template) {
        $this->template = $template;
        return $this;
    }

    public function tokens(array $tokens) {
        $this->tokens = $tokens;
        return $this;
    }

    public function send($receptor , $message)
    {
        $body = [
            "receptor" => $receptor,
            "message"  => $message ,
        ];
        $response = Http::get( $this->address,$body);
        return  $this->hasSucceed($response) ? true : false;
    }

    public function sendLookUp($receptor)
    {
        $body = [
            "receptor"  => $receptor,
            "template"  => $this->template,
        ];
        $body += $this->refactor($this->tokens);

        $response = Http::get( $this->lookup_address,$body);
        return  $this->hasSucceed($response) ? true : false;
    }

    private function hasSucceed($response): bool
    {
        return $response->status() == 200 && json_decode($response->body())->entries[0]->status == 5;
    }
    private function refactor(array $tokens) : array
    {
        $func = function ($data){
            $data = str_replace(" " , " ", $data);
            $data = str_replace("-" , " ", $data);
            $data = str_replace("_" , " ", $data);
            $data = str_replace("\n", ".", $data);
            return $data;
        };

        $tokens = array_map($func, $tokens);
        return $tokens;
    }
}
