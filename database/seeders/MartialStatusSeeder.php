<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MartialStatusSeeder extends Seeder
{
    private  $datas = [
        'مجرد'  ,
        'متاهل' ,
        'مجرد با تجربه یک طلاق'   ,
        'مجرد با تجربه دو طلاق'    ,
        'متاهل با تجربه یک طلاق'  ,
        'متاهل با تجربه دو طلاق'   ,
        'عقد'                   ,
        'نامزدی'                 ,
    ];

    public function run()
    {
        foreach ($this->datas as $data)
        {
            DB::table('marital_statuses')->insert([
               'title' => $data ,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }

    }


}
