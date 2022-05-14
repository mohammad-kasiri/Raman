<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CareerSeeder extends Seeder
{
    private $datas = [
        'خلبان',
        'مشاور املاک',
        'معلم',
        'فروشنده',
        'بقال',
        'راننده اسنپ',
        'برنامه نویس',
        'گرافیست',
        'دندان پزشک',
        'خانه دار',
        'مکانیک',
        'آرایشگر',
        'کارمند بانک',
        'کارمند آموزش و پرورش',
        'بازاریاب',
        'پزشک',
        'خیاط',
        'منابع انسانی',
        'مدیر فروش',
    ];

    public function run()
    {
        foreach ($this->datas as $data)
        {
            DB::table('careers')->insert([
                'title'      => $data,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
