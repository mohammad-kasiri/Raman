<?php

return
    [
        'default' => env('SMS_PANEL', 'kavenegar'),

        "services" =>
            [
                "kavenegar" =>
                    [
                        "API_Key"         => env("KAVEHNEGAR_API_KEY" , null),
                        "lookup_address"  => "https://api.kavenegar.com/v1/".env("KAVEHNEGAR_API_KEY")."/verify/lookup.json",
                        "address"         => "https://api.kavenegar.com/v1/".env("KAVEHNEGAR_API_KEY")."/sms/send.json",
                    ],
                    "sms_ir" =>
                        [
                            "API_Key"              => env("SMS_IR_API_KEY"    , null),
                            "Secret Key"           => env("SMS_IR_SECRET_KEY" , null),
                            "Line Number"          => env("SMS_IR_LINE_NUMBER" ),
                            "Token Address"        => "https://RestfulSms.com/api/Token",
                            "Default Address"      => "https://RestfulSms.com/api/MessageSend",
                            "Lookup Address"       => "https://RestfulSms.com/api/UltraFastSend",
                            "Template"             => "10",
                        ]
            ]
    ];
