<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SocialMediaSeeder extends Seeder
{
    private $datas = [
      [
          'fa_title'     => 'واتس اپ',
          'en_title'     => "whatsapp",
          'font_awesome' => "fab fa-whatsapp",
      ],
        [
          'fa_title'     => 'اینستاگرام',
          'en_title'     => "instagram",
          'font_awesome' => "fab fa-instagram",
      ],
      [
          'fa_title' => 'یوتیوب',
          'en_title' => "Youtube",
          'font_awesome' => "fab fa-youtube"
      ],
      [
          'fa_title' => 'لینکدین',
          'en_title' => "linkedin",
          'font_awesome' => "fab fa-linkedin"
      ],
      [
          'fa_title' => 'تلگرام',
          'en_title' => "telegram",
          'font_awesome' => "fab fa-telegram"
      ],
      [
          'fa_title' => 'توییتر',
          'en_title' => "tweeter",
          'font_awesome' => "fab fa-twitter"
      ],
    ];
    public function run()
    {
        foreach ($this->datas as $data) {
            DB::table('social_media')->insert($data);
        }
    }
}
