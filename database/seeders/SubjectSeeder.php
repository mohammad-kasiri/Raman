<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SubjectSeeder extends Seeder
{
    protected array $datas=[
        ['title' => 'اضطراب'],
        ['title' => 'استرس'],
        ['title' => 'افسردگی'],
        ['title' => 'مشکلات هیجانی و عاطفی'],
        ['title' => 'وسواس'],
        ['title' => 'فوبیا'],
        ['title' => 'تله های روانی'],
        ['title' => 'طرحواره ها'],
        ['title' => 'عزت نفس'],
        ['title' => 'اعتماد به نفس'],
        ['title' => 'استعداد'],
        ['title' => 'خلاقیت'],
        ['title' => 'کنترل خشم'],
        ['title' => 'پرخاشگری'],
        ['title' => 'مهارت های زندگی'],
        ['title' => 'هوش'],
        ['title' => 'مشاوره ی پیش از ازدواج'],
        ['title' => 'اضطراب جدایی'],
        ['title' => 'بلوغ'],
    ];
    public function run()
    {
        DB::table('subjects')->upsert($this->datas , ['title']);
    }
}
