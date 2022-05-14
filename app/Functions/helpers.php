<?php

use Illuminate\Support\Arr;

function generatePhone() : string
{
    return '09' . Arr::random(['02', '10', '38', '35', '90', '22', '12', '15', '19']) . rand(1000000, 9999999);
}
