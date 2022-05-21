<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DegreeSeeder extends Seeder
{
    private $datas = [
        'بدون تحصیلات',
        'سوم ابتدایی',
        'سیکل',
        'دیپلم',
        'دوم دبیرستان',
        'کاردانی',
        'کارشناسی',
        'کارشناسی ارشد',
        'دکتری',
    ];
    public function run()
    {
        foreach ($this->datas as $data)
        {
            DB::table('degrees')->insert([
                'title'      => $data,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
