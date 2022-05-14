<?php

namespace App\Functions;

class Avatar
{
    public static function male():string
    {
        $avatar = rand(1 , 9);
        return asset("images/static/avatars/male/$avatar.png");
    }

    public static function female():string
    {
        $avatar = rand(1 , 9);
        return asset("images/static/avatars/female/$avatar.png");
    }

}
