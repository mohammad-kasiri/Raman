<?php


namespace App\Sms;

use App\Sms\Contract\SMS;
use Http;

class Sms_ir implements SMS
{
    private $token;

    public function __construct()
    {
        //Request Headers Set Here
        $headers = [
            "Content-Type" => "application/json"
        ];

        //Request Body Set Here
        $body    = [
            "UserApiKey"  =>config("sms.services.sms_ir.API_Key"),
	        "SecretKey"   =>config("sms.services.sms_ir.Secret Key"),
        ];

        //Send Request To Get Secret Token
        $response = Http::withHeaders($headers)->post(config("sms.services.sms_ir.Token Address") , $body);

        // Initionlize Token For Send Message
        if ($this->hasSucceed($response))
            $this->token = json_decode($response->body())->TokenKey;

        return false;
    }

    public function send( $phone,$message)
    {
        $headers = [
            "Content-Type"          => "application/json" ,
            "x-sms-ir-secure-token" => $this->token
        ];

        $body    = [
            "Messages"                  => [$message],
            "MobileNumbers"             => [$phone],
            "LineNumber"                => config("sms.services.sms_ir.Line Number"),
            "SendDateTime"              => "",
            "CanContinueInCaseOfError"  => "false",
        ];

        $response = Http::withHeaders($headers)->post(config("sms.services.sms_ir.Default Address") , $body);

        return  $this->hasSucceed($response) ? true : false;
    }

    //First Should Buy Premium Account
    public function send_look_up($phone , $code)
    {
        $headers = [
            "Content-Type"          => "application/json" ,
            "x-sms-ir-secure-token" => $this->token
        ];

        $body    = [
            "ParameterArray"        =>[["Parameter" => "code" , "ParameterValue" => $code]],
            "Mobile"                => $phone,
            "TemplateId"            => config("sms.services.sms_ir.Template")
        ];

        $response = Http::withHeaders($headers)->post(config("sms.services.sms_ir.Lookup Address") , $body);

        return  $this->hasSucceed($response) ? true : false;
    }

    private function hasSucceed($response): bool
    {
        return $response->status() == 201 && json_decode($response->body())->IsSuccessful == true;
    }
}
