<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StudyFieldSeeder extends Seeder
{
    private $datas = [
        'مهندسی برق' ,
        'مهندسی شیمی' ,
        'مهندسی کامپیوتر' ,
        'مهندسی سازه' ,
        'هنرهای تجسمی' ,
        'روانشناسی' ,
        'بازاریابی' ,
        'MBA' ,
        'علوم انسانی' ,
        'ریاضی فیزیک' ,
    ];
    public function run()
    {
        foreach ($this->datas as $data)
        {
            DB::table('study_fields')->insert([
                'title'      => $data,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
