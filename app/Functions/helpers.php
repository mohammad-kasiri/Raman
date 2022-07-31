<?php

use App\Models\Province;
use Illuminate\Support\Arr;

function generatePhone() : string
{
    return '09' . Arr::random(['02', '10', '38', '35', '90', '22', '12', '15', '19']) . rand(1000000, 9999999);
}

function generateGender() : string
{
    return Arr::random(['male' , 'female']);
}

function generateCityId() : string
{
    return rand(Province::FIRST_CITY_ID , Province::LAST_CITY_ID);
}


function generateEmail() : string
{
    return \Illuminate\Support\Str::random(10) . '@' . 'gmail.com';
}
