<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Arr;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Patient>
 */
class PatientFactory extends Factory
{
    public function definition()
    {
        return [
            "career"           => Arr::random(["دانش آموز" , "دانشجو" , "برنامه نویس" , "خانه دار" , "مکانیک" , "مشاور املاک" , "کفاش" , "بیکار" , null , "خیاط", "کفاش", "بقال", "راننده تاکسی", null , "راننده اسنپ", "معلم", "فروشنده", "بازاریاب", "پزشک"]),
            "city_id"          => Arr::random([null , rand(32 , 458)]),
            "address"          => Arr::random([null , Str::random(50)]),
            "birthdate"        => Arr::random([null , $this->faker->dateTimeBetween('-50 years', '-10 years', 'Asia/Tehran'), $this->faker->dateTimeBetween('-50 years', '-10 years', 'Asia/Tehran')]),
            "marital_status"   => Arr::random(['مجرد','متاهل','مجرد با تجربه یک طلاق','مجرد با تجربه دو طلاق','متاهل با تجربه یک طلاق','متاهل با تجربه دو طلاق','عقد','نامزدی', null , null]),
        ];
    }
}
