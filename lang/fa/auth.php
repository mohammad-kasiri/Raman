<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Authentication Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines are used during authentication for various
    | messages that we need to display to the user. You are free to modify
    | these language lines according to your application's requirements.
    |
    */

    'login' => [
        'messages' => [
            'failed' => 'اطلاعات ورود شما با هم مطابقت ندارد.',
        ],
        'view' => [
            'title'                 => 'ورود به سایت',
            'subtitle'              => 'نام کاربری و کلمه عبور خود را وارد کنید',
            'username_placeholder'  => 'آدرس ایمیل یا شماره تلفن',
            'password_placeholder'  => 'کلمه عبور',
            'submit_button'         => 'ورود',
            'remember'              => 'مرا به خاطر بسپار' ,
            'registration_offer'   => 'حساب کاربری ندارید؟  ثبت نام کنید!',
            'otp_offer'             => 'ورود با رمز یکبار مصرف'
        ]
    ],

    'otp-login' => [
        'view' => [
            'title'                          => 'ورود به سایت',
            'mobile_placeholder'             => 'تلفن همراه',
            'send_sms_button'                => 'ارسال کد',
            'verification_code_placeholder'  => 'کد تایید پیامک شده',
            'submit_button'                  => 'ورود',
            'remember'                       => 'مرا به خاطر بسپار' ,
            'registration_offer'             => 'حساب کاربری ندارید؟  ثبت نام کنید!',
            'login_with_password'            => 'ورود با نام کاربری و کلمه ی عبور'
        ]
    ],

    'register' => [
        'view' => [
            'title'    => 'ایجاد حساب کاربری',
            'subtitle' => 'لطفا فرم زیر را کامل کنید',
            'first_name_placeholder'         => 'نام',
            'last_name_placeholder'          => 'نام خانوادگی',
            'mobile_placeholder'             => 'تلفن همراه',
            'send_sms_button'                => 'ارسال کد',
            'verification_code_placeholder'  => 'کد تایید پیامک شده',
            'gender_placeholder'             => 'جنسیت :',
            'female_label'                   => 'خانم',
            'male_label'                     => 'آقا',
            'submit_button'                  => 'ثبت نام',
            'login_offer'                    => 'قبلا ثبت نام کرده اید؟ وارد شوید!',
        ]
    ],

    'otp' => [
        'messages' => [
            'successful'   => ' یک پیامک حاوی کد تایید برای شما ارسال شد.' ,
            'repetitive'   => 'در حال حاضر یک پیامک حاوی کد تایید برای شما ارسال شده است.' ,
            'ask_to_send'  => 'درخواست کد تایید و وارد کردن الزامی است.' ,
            'code_expired' => 'کد تایید وارد شده منقضی شده است' ,
            'code_wrong'   => 'کد تایید وارد شده صحیح نیست' ,
        ]
    ]



];
