<?php

namespace Database\Factories;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Arr;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Doctor>
 */
class DoctorFactory extends Factory
{
    public function definition()
    {
        return [
            "educational_background"    => Arr::random([null , $this->educational_background()]),
            "working_background"        => Arr::random([null , $this->educational_background()]),
            "bio"                       => Arr::random([null , $this->faker->text]),
            "price_per_minute"          => 100 * rand(25 , 45),
            "is_visible"                => Arr::random([true , false]),
            "first_day_of_work"         => Carbon::now()->subYears(rand(3 , 8)),
        ];
    }

    private function educational_background(){
        return Arr::random([
           'کارشناسی ارشد روانشناسی * دارای پروانه فعالیت از سازمان بهزیستی'  ,
           'کارشناس ارشد روانشناسی تربیتی * نویسنده مقاله در حوزه روانشناسی' ,
           'کارشناس ارشد مشاوره خانواده * کارشناس علوم تربیتی * نویسنده چندین مقاله علمی مختلف',
           'کارشناس ارشد و کارشناس روانشناسی عمومی * دارای مدرک CBT از دانشگاه تهران'
        ]);
    }

    private function working_background(){
        return Arr::random([
            'کارشناسی ارشد روانشناسی * دارای پروانه فعالیت از سازمان بهزیستی'  ,
            'کارشناس ارشد روانشناسی تربیتی * نویسنده مقاله در حوزه روانشناسی' ,
            'کارشناس ارشد مشاوره خانواده * کارشناس علوم تربیتی * نویسنده چندین مقاله علمی مختلف',
            'کارشناس ارشد و کارشناس روانشناسی عمومی * دارای مدرک CBT از دانشگاه تهران'
        ]);
    }
}
