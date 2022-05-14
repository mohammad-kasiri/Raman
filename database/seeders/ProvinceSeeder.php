<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProvinceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach ($this->datas() as $data){
            DB::table('provinces')->insert($data);
        }
    }

    protected function datas()
    {
        return
            [
                /************************  PROVINCES STARTS HERE  *************************/
                [
                    "province_id"   =>   null,
                    "name"        =>   "آذربایجان‌شرقی"
                ],
                [
                    "province_id"   =>   null,
                    "name"        =>   "آذربایجان‌غربی"
                ],
                [
                    "province_id"   =>   null,
                    "name"        =>   "اردبیل"
                ],
                [
                    "province_id"   =>   null,
                    "name"        =>   "اصفهان"
                ],
                [
                    "province_id"   =>   null,
                    "name"        =>   "البرز"
                ],
                [
                    "province_id"   =>   null,
                    "name"        =>   "ایلام"
                ],
                [
                    "province_id"   =>   null,
                    "name"        =>   "بوشهر"
                ],
                [
                    "province_id"   =>   null,
                    "name"        =>   "تهران"
                ],
                [
                    "province_id"   =>   null,
                    "name"        =>   "چهارمحال‌و‌بختیاری"
                ],
                [
                    "province_id"   =>   null,
                    "name"        =>   "خراسان‌جنوبی"
                ],
                [
                    "province_id"   =>   null,
                    "name"        =>   "خراسان‌رضوی"
                ],
                [
                    "province_id"   =>   null,
                    "name"        =>   "خراسان‌شمالی"
                ],
                [
                    "province_id"   =>   null,
                    "name"        =>   "خوزستان"
                ],
                [
                    "province_id"   =>   null,
                    "name"        =>   "زنجان"
                ],
                [
                    "province_id"   =>   null,
                    "name"        =>   "سمنان"
                ],
                [
                    "province_id"   =>   null,
                    "name"        =>   "سیستان‌و‌بلوچستان"
                ],
                [
                    "province_id"   =>   null,
                    "name"        =>   "فارس"
                ],
                [
                    "province_id"   =>   null,
                    "name"        =>   "قزوین"
                ],
                [
                    "province_id"   =>   null,
                    "name"        =>   "قم"
                ],
                [
                    "province_id"   =>   null,
                    "name"        =>   "کردستان"
                ],
                [
                    "province_id"   =>   null,
                    "name"        =>   "كرمان"
                ],
                [
                    "province_id"   =>   null,
                    "name"        =>   "كرمانشاه"
                ],
                [
                    "province_id"   =>   null,
                    "name"        =>   "کهگیلویه‌و‌بویراحمد"
                ],
                [
                    "province_id"   =>   null,
                    "name"        =>   "گلستان"
                ],
                [
                    "province_id"   =>   null,
                    "name"        =>   "گیلان"
                ],
                [
                    "province_id"   =>   null,
                    "name"        =>   "لرستان"
                ],
                [
                    "province_id"   =>   null,
                    "name"        =>   "مازندران"
                ],
                [
                    "province_id"   =>   null,
                    "name"        =>   "مركزی"
                ],
                [
                    "province_id"   =>   null,
                    "name"        =>   "هرمزگان"
                ],
                [
                    "province_id"   =>   null,
                    "name"        =>   "همدان"
                ],
                [
                    "province_id"   =>   null,
                    "name"        =>   "یزد"
                ],

                /************************  PROVINCES ENDS HERE  *************************/
                /*                                                                      */
                /*                                                                      */
                /*                                                                      */
                /*                                                                      */
                /*                                                                      */
                /************************       آذربایجان شرقی     *************************/
                [
                    "province_id"   =>   1,
                    "name"        =>   "اسکو"
                ],
                [
                    "province_id"   =>   1,
                    "name"        =>   "اهر"
                ],
                [
                    "province_id"   =>   1,
                    "name"        =>   "آذرشهر"
                ],
                [
                    "province_id"   =>   1,
                    "name"        =>   "بستان آباد"
                ],
                [
                    "province_id"   =>   1,
                    "name"        =>   "بناب"
                ],
                [
                    "province_id"   =>   1,
                    "name"        =>   "تبریز"
                ],
                [
                    "province_id"   =>   1,
                    "name"        =>   "جلفا"
                ],
                [
                    "province_id"   =>   1,
                    "name"        =>   "چاراویماق"
                ],
                [
                    "province_id"   =>   1,
                    "name"        =>   "خداآفرین"
                ],
                [
                    "province_id"   =>   1,
                    "name"        =>   "سراب"
                ],
                [
                    "province_id"   =>   1,
                    "name"        =>   "شبستر"
                ],
                [
                    "province_id"   =>   1,
                    "name"        =>   "عجب شیر"
                ],
                [
                    "province_id"   =>   1,
                    "name"        =>   "کلیبر"
                ],
                [
                    "province_id"   =>   1,
                    "name"        =>   "مراغه"
                ],
                [
                    "province_id"   =>   1,
                    "name"        =>   "مرند"
                ],
                [
                    "province_id"   =>   1,
                    "name"        =>   "ملکان"
                ],
                [
                    "province_id"   =>   1,
                    "name"        =>   "میانه"
                ],
                [
                    "province_id"   =>   1,
                    "name"        =>   "ورزقان"
                ],
                [
                    "province_id"   =>   1,
                    "name"        =>   "هریس"
                ],
                [
                    "province_id"   =>   1,
                    "name"        =>   "هشترود"
                ],


                /************************************************************************/
                /*                                                                      */
                /*                                                                      */
                /*                                                                      */
                /*                                                                      */
                /*                                                                      */
                /************************       آذربایجان غربی     *************************/
                [
                    "province_id"   =>   2,
                    "name"        =>   "ارومیه"
                ],
                [
                    "province_id"   =>   2,
                    "name"        =>   "اشنویه"
                ],
                [
                    "province_id"   =>   2,
                    "name"        =>   "بوكان"
                ],
                [
                    "province_id"   =>   2,
                    "name"        =>   "پلدشت"
                ],
                [
                    "province_id"   =>   2,
                    "name"        =>   "پیرانشهر"
                ],
                [
                    "province_id"   =>   2,
                    "name"        =>   "تكاب"
                ],
                [
                    "province_id"   =>   2,
                    "name"        =>   "چالدران"
                ],
                [
                    "province_id"   =>   2,
                    "name"        =>   "چایپاره"
                ],
                [
                    "province_id"   =>   2,
                    "name"        =>   "خوئ"
                ],
                [
                    "province_id"   =>   2,
                    "name"        =>   "سردشت"
                ],
                [
                    "province_id"   =>   2,
                    "name"        =>   "سلماس"
                ],
                [
                    "province_id"   =>   2,
                    "name"        =>   "شاهین دژ"
                ],
                [
                    "province_id"   =>   2,
                    "name"        =>   "شوط"
                ],
                [
                    "province_id"   =>   2,
                    "name"        =>   "ماكو"
                ],
                [
                    "province_id"   =>   2,
                    "name"        =>   "مهاباد"
                ],
                [
                    "province_id"   =>   2,
                    "name"        =>   "میاندوآب"
                ],
                [
                    "province_id"   =>   2,
                    "name"        =>   "نقده"
                ],
                /************************************************************************/
                /*                                                                      */
                /*                                                                      */
                /*                                                                      */
                /*                                                                      */
                /*                                                                      */
                /********************************  اردبیل   *******************************/
                [
                    "province_id"   =>   3,
                    "name"        =>   "اردبیل"
                ],
                [
                    "province_id"   =>   3,
                    "name"        =>   "بیله سوار"
                ],
                [
                    "province_id"   =>   3,
                    "name"        =>   "پارس آباد"
                ],
                [
                    "province_id"   =>   3,
                    "name"        =>   "خلخال"
                ],
                [
                    "province_id"   =>   3,
                    "name"        =>   "سرعین"
                ],
                [
                    "province_id"   =>   3,
                    "name"        =>   "كوثر"
                ],
                [
                    "province_id"   =>   3,
                    "name"        =>   "گرمی"
                ],
                [
                    "province_id"   =>   3,
                    "name"        =>   "مشگین شهر"
                ],
                [
                    "province_id"   =>   3,
                    "name"        =>   "نمین"
                ],
                [
                    "province_id"   =>   3,
                    "name"        =>   "نیر"
                ],
                /************************************************************************/
                /*                                                                      */
                /*                                                                      */
                /*                                                                      */
                /*                                                                      */
                /*                                                                      */
                /*******************************  اصفهان   *******************************/
                [
                    "province_id"   =>   4,
                    "name"        =>   "اردستان"
                ],
                [
                    "province_id"   =>   4,
                    "name"        =>   "اصفهان"
                ],
                [
                    "province_id"   =>   4,
                    "name"        =>   "آران وبیدگل"
                ],
                [
                    "province_id"   =>   4,
                    "name"        =>   "برخوار"
                ],
                [
                    "province_id"   =>   4,
                    "name"        =>   "بویین و میاندشت"
                ],
                [
                    "province_id"   =>   4,
                    "name"        =>   "تیران وکرون"
                ],
                [
                    "province_id"   =>   4,
                    "name"        =>   "چادگان"
                ],
                [
                    "province_id"   =>   4,
                    "name"        =>   "خمینی شهر"
                ],
                [
                    "province_id"   =>   4,
                    "name"        =>   "تیران وکرون"
                ],
                [
                    "province_id"   =>   4,
                    "name"        =>   "خوانسار"
                ],
                [
                    "province_id"   =>   4,
                    "name"        =>   "خور و بیابانک"
                ],
                [
                    "province_id"   =>   4,
                    "name"        =>   "دهاقان"
                ],
                [
                    "province_id"   =>   4,
                    "name"        =>   "سمیرم"
                ],
                [
                    "province_id"   =>   4,
                    "name"        =>   "شاهین شهرومیمه"
                ],
                [
                    "province_id"   =>   4,
                    "name"        =>   "شهرضا"
                ],
                [
                    "province_id"   =>   4,
                    "name"        =>   "فریدن"
                ],
                [
                    "province_id"   =>   4,
                    "name"        =>   "فریدونشهر"
                ],
                [
                    "province_id"   =>   4,
                    "name"        =>   "فلاورجان"
                ],
                [
                    "province_id"   =>   4,
                    "name"        =>   "کاشان"
                ],
                [
                    "province_id"   =>   4,
                    "name"        =>   "گلپایگان"
                ],
                [
                    "province_id"   =>   4,
                    "name"        =>   "لنجان"
                ],
                [
                    "province_id"   =>   4,
                    "name"        =>   "مبارکه"
                ],
                [
                    "province_id"   =>   4,
                    "name"        =>   "نایین"
                ],
                [
                    "province_id"   =>   4,
                    "name"        =>   "نجف آباد"
                ],
                [
                    "province_id"   =>   4,
                    "name"        =>   "نطنز"
                ],
                /************************************************************************/
                /*                                                                      */
                /*                                                                      */
                /*                                                                      */
                /*                                                                      */
                /*                                                                      */
                /************************        البرز       ******************************/
                [
                    "province_id"   =>   5,
                    "name"        =>   "اشتهارد"
                ],
                [
                    "province_id"   =>   5,
                    "name"        =>   "ساوجبلاغ"
                ],
                [
                    "province_id"   =>   5,
                    "name"        =>   "طالقان"
                ],
                [
                    "province_id"   =>   5,
                    "name"        =>   "فردیس"
                ],
                [
                    "province_id"   =>   5,
                    "name"        =>   "کرج"
                ],
                [
                    "province_id"   =>   5,
                    "name"        =>   "نظرآباد"
                ],
                /************************************************************************/
                /*                                                                      */
                /*                                                                      */
                /*                                                                      */
                /*                                                                      */
                /*                                                                      */
                /************************        ایلام       ******************************/
                [
                    "province_id"   =>   6,
                    "name"        =>   "ایلام"
                ],
                [
                    "province_id"   =>   6,
                    "name"        =>   "ایوان"
                ],
                [
                    "province_id"   =>   6,
                    "name"        =>   "آبدانان"
                ],
                [
                    "province_id"   =>   6,
                    "name"        =>   "بدره"
                ],
                [
                    "province_id"   =>   6,
                    "name"        =>   "چرداول"
                ],
                [
                    "province_id"   =>   6,
                    "name"        =>   "دره شهر"
                ],
                [
                    "province_id"   =>   6,
                    "name"        =>   "دهلران"
                ],
                [
                    "province_id"   =>   6,
                    "name"        =>   "سیروان"
                ],
                [
                    "province_id"   =>   6,
                    "name"        =>   "ملكشاهی"
                ],
                [
                    "province_id"   =>   6,
                    "name"        =>   "مهران"
                ],
                /************************************************************************/
                /*                                                                      */
                /*                                                                      */
                /*                                                                      */
                /*                                                                      */
                /*                                                                      */
                /************************       بوشهر       ******************************/
                [
                    "province_id"   =>   7,
                    "name"        =>   "بوشهر"
                ],
                [
                    "province_id"   =>   7,
                    "name"        =>   "تنگستان"
                ],
                [
                    "province_id"   =>   7,
                    "name"        =>   "جم"
                ],
                [
                    "province_id"   =>   7,
                    "name"        =>   "دشتستان"
                ],
                [
                    "province_id"   =>   7,
                    "name"        =>   "دشتی"
                ],
                [
                    "province_id"   =>   7,
                    "name"        =>   "دیر"
                ],
                [
                    "province_id"   =>   7,
                    "name"        =>   "دیلم"
                ],
                [
                    "province_id"   =>   7,
                    "name"        =>   "عسلویه"
                ],
                [
                    "province_id"   =>   7,
                    "name"        =>   "كنگان"
                ],
                [
                    "province_id"   =>   7,
                    "name"        =>   "گناوه"
                ],
                /************************************************************************/
                /*                                                                      */
                /*                                                                      */
                /*                                                                      */
                /*                                                                      */
                /*                                                                      */
                /************************      تهران        ******************************/
                [
                    "province_id"   =>   8,
                    "name"        =>   "اسلامشهر"
                ],
                [
                    "province_id"   =>   8,
                    "name"        =>   "بهارستان"
                ],
                [
                    "province_id"   =>   8,
                    "name"        =>   "پاكدشت"
                ],
                [
                    "province_id"   =>   8,
                    "name"        =>   "پردیس"
                ],
                [
                    "province_id"   =>   8,
                    "name"        =>   "پیشوا"
                ],
                [
                    "province_id"   =>   8,
                    "name"        =>   "تهران(مناطق 22 گانه)"
                ],
                [
                    "province_id"   =>   8,
                    "name"        =>   "دماوند"
                ],
                [
                    "province_id"   =>   8,
                    "name"        =>   "رباطكریم"
                ],
                [
                    "province_id"   =>   8,
                    "name"        =>   "رئ"
                ],
                [
                    "province_id"   =>   8,
                    "name"        =>   "شمیرانات"
                ],
                [
                    "province_id"   =>   8,
                    "name"        =>   "شهر قدس"
                ],
                [
                    "province_id"   =>   8,
                    "name"        =>   "شهر جدید اندیشه"
                ],
                [
                    "province_id"   =>   8,
                    "name"        =>   "شهریار"
                ],
                [
                    "province_id"   =>   8,
                    "name"        =>   "فیروزكوه"
                ],

                [
                    "province_id"   =>   8,
                    "name"        =>   "قرچک"
                ],
                [
                    "province_id"   =>   8,
                    "name"        =>   "ملارد"
                ],
                [
                    "province_id"   =>   8,
                    "name"        =>   "ورامین"
                ],
                /************************************************************************/
                /*                                                                      */
                /*                                                                      */
                /*                                                                      */
                /*                                                                      */
                /*                                                                      */
                /************************      چهارمحال‌و‌بختیاری       **********************/
                [
                    "province_id"   =>   9,
                    "name"        =>   "اردل"
                ],
                [
                    "province_id"   =>   9,
                    "name"        =>   "بروجن"
                ],
                [
                    "province_id"   =>   9,
                    "name"        =>   "بن"
                ],
                [
                    "province_id"   =>   9,
                    "name"        =>   "سامان"
                ],
                [
                    "province_id"   =>   9,
                    "name"        =>   "شهركرد"
                ],
                [
                    "province_id"   =>   9,
                    "name"        =>   "فارسان"
                ],
                [
                    "province_id"   =>   9,
                    "name"        =>   "كوهرنگ"
                ],
                [
                    "province_id"   =>   9,
                    "name"        =>   "كیار"
                ],
                [
                    "province_id"   =>   9,
                    "name"        =>   "لردگان"
                ],
                /************************************************************************/
                /*                                                                      */
                /*                                                                      */
                /*                                                                      */
                /*                                                                      */
                /*                                                                      */
                /************************      خراسان‌جنوبی      **************************/
                [
                    "province_id"   =>   10,
                    "name"        =>   "بشرویه"
                ],
                [
                    "province_id"   =>   10,
                    "name"        =>   "بیرجند"
                ],
                [
                    "province_id"   =>   10,
                    "name"        =>   "خوسف"
                ],
                [
                    "province_id"   =>   10,
                    "name"        =>   "درمیان"
                ],
                [
                    "province_id"   =>   10,
                    "name"        =>   "زیرکوه"
                ],
                [
                    "province_id"   =>   10,
                    "name"        =>   "سرایان"
                ],
                [
                    "province_id"   =>   10,
                    "name"        =>   "سربیشه"
                ],
                [
                    "province_id"   =>   10,
                    "name"        =>   "طبس"
                ],
                [
                    "province_id"   =>   10,
                    "name"        =>   "فردوس"
                ],
                [
                    "province_id"   =>   10,
                    "name"        =>   "قائنات"
                ],
                [
                    "province_id"   =>   10,
                    "name"        =>   "نهبندان"
                ],
                /************************************************************************/
                /*                                                                      */
                /*                                                                      */
                /*                                                                      */
                /*                                                                      */
                /*                                                                      */
                /************************      خراسان رضوی     **************************/
                [
                    "province_id"   =>   11,
                    "name"        =>   "باخرز"
                ],
                [
                    "province_id"   =>   11,
                    "name"        =>   "بجستان"
                ],
                [
                    "province_id"   =>   11,
                    "name"        =>   "بردسكن"
                ],
                [
                    "province_id"   =>   11,
                    "name"        =>   "بینالود"
                ],
                [
                    "province_id"   =>   11,
                    "name"        =>   "تایباد"
                ],
                [
                    "province_id"   =>   11,
                    "name"        =>   "تربت جام"
                ],
                [
                    "province_id"   =>   11,
                    "name"        =>   "تربت حیدریه"
                ],
                [
                    "province_id"   =>   11,
                    "name"        =>   "جغتای"
                ],
                [
                    "province_id"   =>   11,
                    "name"        =>   "جوین"
                ],
                [
                    "province_id"   =>   11,
                    "name"        =>   "چناران"
                ],
                [
                    "province_id"   =>   11,
                    "name"        =>   "خلیل آباد"
                ],
                [
                    "province_id"   =>   11,
                    "name"        =>   "خواف"
                ],
                [
                    "province_id"   =>   11,
                    "name"        =>   "خوشاب"
                ],

                [
                    "province_id"   =>   11,
                    "name"        =>   "داورزن"
                ],
                [
                    "province_id"   =>   11,
                    "name"        =>   "درگز"
                ],
                [
                    "province_id"   =>   11,
                    "name"        =>   "رشتخوار"
                ],
                [
                    "province_id"   =>   11,
                    "name"        =>   "زاوه"
                ],
                [
                    "province_id"   =>   11,
                    "name"        =>   "سبزوار"
                ],
                [
                    "province_id"   =>   11,
                    "name"        =>   "سرخس"
                ],
                [
                    "province_id"   =>   11,
                    "name"        =>   "فریمان"
                ],
                [
                    "province_id"   =>   11,
                    "name"        =>   "فیروزه"
                ],
                [
                    "province_id"   =>   11,
                    "name"        =>   "قوچان"
                ],
                [
                    "province_id"   =>   11,
                    "name"        =>   "كاشمر"
                ],
                [
                    "province_id"   =>   11,
                    "name"        =>   "كلات"
                ],
                [
                    "province_id"   =>   11,
                    "name"        =>   "گناباد"
                ],
                [
                    "province_id"   =>   11,
                    "name"        =>   "مشهد"
                ],
                [
                    "province_id"   =>   11,
                    "name"        =>   "مه ولات"
                ],
                [
                    "province_id"   =>   11,
                    "name"        =>   "نیشابور"
                ],
                /************************************************************************/
                /*                                                                      */
                /*                                                                      */
                /*                                                                      */
                /*                                                                      */
                /*                                                                      */
                /************************      خراسان شمالی     **************************/
                [
                    "province_id"   =>   12,
                    "name"        =>   "اسفراین"
                ],
                [
                    "province_id"   =>   12,
                    "name"        =>   "بجنورد"
                ],
                [
                    "province_id"   =>   12,
                    "name"        =>   "جاجرم"
                ],
                [
                    "province_id"   =>   12,
                    "name"        =>   "راز و جرگلان"
                ],
                [
                    "province_id"   =>   12,
                    "name"        =>   "شیروان"
                ],
                [
                    "province_id"   =>   12,
                    "name"        =>   "فاروج"
                ],
                [
                    "province_id"   =>   12,
                    "name"        =>   "گرمه"
                ],
                [
                    "province_id"   =>   12,
                    "name"        =>   "مانه وسملقان"
                ],
                /************************************************************************/
                /*                                                                      */
                /*                                                                      */
                /*                                                                      */
                /*                                                                      */
                /*                                                                      */
                /*****************************      خوزستان     **************************/
                [
                    "province_id"   =>   13,
                    "name"        =>   "امیدیه"
                ],
                [
                    "province_id"   =>   13,
                    "name"        =>   "اندیکا"
                ],
                [
                    "province_id"   =>   13,
                    "name"        =>   "اندیمشک"
                ],
                [
                    "province_id"   =>   13,
                    "name"        =>   "اهواز"
                ],
                [
                    "province_id"   =>   13,
                    "name"        =>   "ایذه"
                ],
                [
                    "province_id"   =>   13,
                    "name"        =>   "آبادان"
                ],
                [
                    "province_id"   =>   13,
                    "name"        =>   "آغاجاری"
                ],
                [
                    "province_id"   =>   13,
                    "name"        =>   "باغ ملک"
                ],
                [
                    "province_id"   =>   13,
                    "name"        =>   "باوی"
                ],
                [
                    "province_id"   =>   13,
                    "name"        =>   "بندرماهشهر"
                ],
                [
                    "province_id"   =>   13,
                    "name"        =>   "بهبهان"
                ],
                [
                    "province_id"   =>   13,
                    "name"        =>   "حمیدیه"
                ],
                [
                    "province_id"   =>   13,
                    "name"        =>   "خرمشهر"
                ],
                [
                    "province_id"   =>   13,
                    "name"        =>   "دزفول"
                ],
                [
                    "province_id"   =>   13,
                    "name"        =>   "دشت آزادگان"
                ],
                [
                    "province_id"   =>   13,
                    "name"        =>   "رامشیر"
                ],
                [
                    "province_id"   =>   13,
                    "name"        =>   "رامهرمز"
                ],
                [
                    "province_id"   =>   13,
                    "name"        =>   "شادگان"
                ],
                [
                    "province_id"   =>   13,
                    "name"        =>   "شوش"
                ],
                [
                    "province_id"   =>   13,
                    "name"        =>   "شوشتر"
                ],
                [
                    "province_id"   =>   13,
                    "name"        =>   "کارون"
                ],
                [
                    "province_id"   =>   13,
                    "name"        =>   "گتوند"
                ],
                [
                    "province_id"   =>   13,
                    "name"        =>   "لالی"
                ],
                [
                    "province_id"   =>   13,
                    "name"        =>   "مسجدسلیمان"
                ],
                [
                    "province_id"   =>   13,
                    "name"        =>   "هفتگل"
                ],
                [
                    "province_id"   =>   13,
                    "name"        =>   "هندیجان"
                ],
                [
                    "province_id"   =>   13,
                    "name"        =>   "هویزه"
                ],
                /************************************************************************/
                /*                                                                      */
                /*                                                                      */
                /*                                                                      */
                /*                                                                      */
                /*                                                                      */
                /********************************     زنجان     **************************/
                [
                    "province_id"   =>   14,
                    "name"        =>   "ابهر"
                ],
                [
                    "province_id"   =>   14,
                    "name"        =>   "ایجرود"
                ],
                [
                    "province_id"   =>   14,
                    "name"        =>   "خدابنده"
                ],
                [
                    "province_id"   =>   14,
                    "name"        =>   "خرمدره"
                ],
                [
                    "province_id"   =>   14,
                    "name"        =>   "زنجان"
                ],
                [
                    "province_id"   =>   14,
                    "name"        =>   "سلطانیه"
                ],
                [
                    "province_id"   =>   14,
                    "name"        =>   "طارم"
                ],
                [
                    "province_id"   =>   14,
                    "name"        =>   "ماهنشان"
                ],
                /************************************************************************/
                /*                                                                      */
                /*                                                                      */
                /*                                                                      */
                /*                                                                      */
                /*                                                                      */
                /********************************     سمنان     **************************/
                [
                    "province_id"   =>   15,
                    "name"        =>   "آرادان"
                ],
                [
                    "province_id"   =>   15,
                    "name"        =>   "دامغان"
                ],
                [
                    "province_id"   =>   15,
                    "name"        =>   "سرخه"
                ],
                [
                    "province_id"   =>   15,
                    "name"        =>   "سمنان"
                ],
                [
                    "province_id"   =>   15,
                    "name"        =>   "شاهرود"
                ],
                [
                    "province_id"   =>   15,
                    "name"        =>   "گرمسار"
                ],
                [
                    "province_id"   =>   15,
                    "name"        =>   "مهدئ شهر"
                ],
                [
                    "province_id"   =>   15,
                    "name"        =>   "میامی"
                ],
                /************************************************************************/
                /*                                                                      */
                /*                                                                      */
                /*                                                                      */
                /*                                                                      */
                /*                                                                      */
                /*************************  سیستان‌و‌بلوچستان     **************************/
                [
                    "province_id"   =>   16,
                    "name"        =>   "ایرانشهر"
                ],
                [
                    "province_id"   =>   16,
                    "name"        =>   "چابهار"
                ],
                [
                    "province_id"   =>   16,
                    "name"        =>   "خاش"
                ],
                [
                    "province_id"   =>   16,
                    "name"        =>   "دلگان"
                ],
                [
                    "province_id"   =>   16,
                    "name"        =>   "زابل"
                ],
                [
                    "province_id"   =>   16,
                    "name"        =>   "زاهدان"
                ],
                [
                    "province_id"   =>   16,
                    "name"        =>   "زهك"
                ],
                [
                    "province_id"   =>   16,
                    "name"        =>   "سراوان"
                ],
                [
                    "province_id"   =>   16,
                    "name"        =>   "سرباز"
                ],
                [
                    "province_id"   =>   16,
                    "name"        =>   "سیب و سوران"
                ],
                [
                    "province_id"   =>   16,
                    "name"        =>   "فنوج"
                ],
                [
                    "province_id"   =>   16,
                    "name"        =>   "قصرقند"
                ],
                [
                    "province_id"   =>   16,
                    "name"        =>   "كنارك"
                ],
                [
                    "province_id"   =>   16,
                    "name"        =>   "مهرستان"
                ],
                [
                    "province_id"   =>   16,
                    "name"        =>   "میرجاوه"
                ],
                [
                    "province_id"   =>   16,
                    "name"        =>   "نیك شه"
                ],
                [
                    "province_id"   =>   16,
                    "name"        =>   "نیمروز"
                ],
                [
                    "province_id"   =>   16,
                    "name"        =>   "هامون"
                ],
                [
                    "province_id"   =>   16,
                    "name"        =>   "هیرمند"
                ],
                /************************************************************************/
                /*                                                                      */
                /*                                                                      */
                /*                                                                      */
                /*                                                                      */
                /*                                                                      */
                /****************************    فارس       *****************************/
                [
                    "province_id"   =>   17,
                    "name"        =>   "ارسنجان"
                ],
                [
                    "province_id"   =>   17,
                    "name"        =>   "استهبان"
                ],
                [
                    "province_id"   =>   17,
                    "name"        =>   "اقلید"
                ],
                [
                    "province_id"   =>   17,
                    "name"        =>   "آباده"
                ],
                [
                    "province_id"   =>   17,
                    "name"        =>   "بوانات"
                ],
                [
                    "province_id"   =>   17,
                    "name"        =>   "پاسارگاد"
                ],
                [
                    "province_id"   =>   17,
                    "name"        =>   "جهرم"
                ],
                [
                    "province_id"   =>   17,
                    "name"        =>   "خرامه"
                ],
                [
                    "province_id"   =>   17,
                    "name"        =>   "خرم بید"
                ],
                [
                    "province_id"   =>   17,
                    "name"        =>   "خنج"
                ],
                [
                    "province_id"   =>   17,
                    "name"        =>   "داراب"
                ],
                [
                    "province_id"   =>   17,
                    "name"        =>   "رستم"
                ],
                [
                    "province_id"   =>   17,
                    "name"        =>   "زرین دشت"
                ],
                [
                    "province_id"   =>   17,
                    "name"        =>   "سپیدان"
                ],
                [
                    "province_id"   =>   17,
                    "name"        =>   "سروستان"
                ],
                [
                    "province_id"   =>   17,
                    "name"        =>   "شیراز"
                ],
                [
                    "province_id"   =>   17,
                    "name"        =>   "فراشبند"
                ],
                [
                    "province_id"   =>   17,
                    "name"        =>   "فسا"
                ],
                [
                    "province_id"   =>   17,
                    "name"        =>   "فیروزآباد"
                ],
                [
                    "province_id"   =>   17,
                    "name"        =>   "قیروکارزین"
                ],
                [
                    "province_id"   =>   17,
                    "name"        =>   "کازرون"
                ],
                [
                    "province_id"   =>   17,
                    "name"        =>   "کوار"
                ],
                [
                    "province_id"   =>   17,
                    "name"        =>   "گراش"
                ],
                [
                    "province_id"   =>   17,
                    "name"        =>   "لارستان"
                ],
                [
                    "province_id"   =>   17,
                    "name"        =>   "لامرد"
                ],
                [
                    "province_id"   =>   17,
                    "name"        =>   "مرودشت"
                ],
                [
                    "province_id"   =>   17,
                    "name"        =>   "ممسنی"
                ],
                [
                    "province_id"   =>   17,
                    "name"        =>   "مهر"
                ],
                [
                    "province_id"   =>   17,
                    "name"        =>   "نی ریز"
                ],
                /************************************************************************/
                /*                                                                      */
                /*                                                                      */
                /*                                                                      */
                /*                                                                      */
                /*                                                                      */
                /****************************    قزوین      *****************************/
                [
                    "province_id"   =>   18,
                    "name"        =>   "آبیك"
                ],
                [
                    "province_id"   =>   18,
                    "name"        =>   "آوج"
                ],
                [
                    "province_id"   =>   18,
                    "name"        =>   "بوئین زهرا"
                ],
                [
                    "province_id"   =>   18,
                    "name"        =>   "تاكستان"
                ],
                [
                    "province_id"   =>   18,
                    "name"        =>   "قزوین"
                ],
                /************************************************************************/
                /*                                                                      */
                /*                                                                      */
                /*                                                                      */
                /*                                                                      */
                /*                                                                      */
                /*******************************    قم      *****************************/
                [
                    "province_id"   =>   19,
                    "name"        =>   "قم"
                ],
                /************************************************************************/
                /*                                                                      */
                /*                                                                      */
                /*                                                                      */
                /*                                                                      */
                /*                                                                      */
                /****************************    كردستان      ****************************/
                [
                    "province_id"   =>   20,
                    "name"        =>   "بانه"
                ],
                [
                    "province_id"   =>   20,
                    "name"        =>   "بیجار"
                ],
                [
                    "province_id"   =>   20,
                    "name"        =>   "دهگلان"
                ],
                [
                    "province_id"   =>   20,
                    "name"        =>   "دیواندره"
                ],
                [
                    "province_id"   =>   20,
                    "name"        =>   "سروآباد"
                ],
                [
                    "province_id"   =>   20,
                    "name"        =>   "سقز"
                ],
                [
                    "province_id"   =>   20,
                    "name"        =>   "سنندج"
                ],
                [
                    "province_id"   =>   20,
                    "name"        =>   "قروه"
                ],
                [
                    "province_id"   =>   20,
                    "name"        =>   "كامیاران"
                ],
                [
                    "province_id"   =>   20,
                    "name"        =>   "مریوان"
                ],
                /************************************************************************/
                /*                                                                      */
                /*                                                                      */
                /*                                                                      */
                /*                                                                      */
                /*                                                                      */
                /*****************************    كرمان       ****************************/
                [
                    "province_id"   =>   21,
                    "name"        =>   "ارزوئیه"
                ],
                [
                    "province_id"   =>   21,
                    "name"        =>   "انار"
                ],
                [
                    "province_id"   =>   21,
                    "name"        =>   "بافت"
                ],
                [
                    "province_id"   =>   21,
                    "name"        =>   "بردسیر"
                ],
                [
                    "province_id"   =>   21,
                    "name"        =>   "بم"
                ],
                [
                    "province_id"   =>   21,
                    "name"        =>   "جیرفت"
                ],
                [
                    "province_id"   =>   21,
                    "name"        =>   "راور"
                ],
                [
                    "province_id"   =>   21,
                    "name"        =>   "رفسنجان"
                ],
                [
                    "province_id"   =>   21,
                    "name"        =>   "رودبارجنوب"
                ],
                [
                    "province_id"   =>   21,
                    "name"        =>   "ریگان"
                ],
                [
                    "province_id"   =>   21,
                    "name"        =>   "زرند"
                ],
                [
                    "province_id"   =>   21,
                    "name"        =>   "سیرجان"
                ],
                [
                    "province_id"   =>   21,
                    "name"        =>   "شهربابك"
                ],
                [
                    "province_id"   =>   21,
                    "name"        =>   "عنبرآباد"
                ],
                [
                    "province_id"   =>   21,
                    "name"        =>   "فاریاب"
                ],
                [
                    "province_id"   =>   21,
                    "name"        =>   "فهرج"
                ],
                [
                    "province_id"   =>   21,
                    "name"        =>   "قلعه گنج"
                ],
                [
                    "province_id"   =>   21,
                    "name"        =>   "كرمان"
                ],
                [
                    "province_id"   =>   21,
                    "name"        =>   "كوهبنان"
                ],
                [
                    "province_id"   =>   21,
                    "name"        =>   "كهنوج"
                ],
                [
                    "province_id"   =>   21,
                    "name"        =>   "منوجان"
                ],
                [
                    "province_id"   =>   21,
                    "name"        =>   "نرماشیر"
                ],
                /************************************************************************/
                /*                                                                      */
                /*                                                                      */
                /*                                                                      */
                /*                                                                      */
                /*                                                                      */
                /*****************************   كرمانشاه      ****************************/
                [
                    "province_id"   =>   22,
                    "name"        =>   "اسلام آبادغرب"
                ],
                [
                    "province_id"   =>   22,
                    "name"        =>   "پاوه"
                ],
                [
                    "province_id"   =>   22,
                    "name"        =>   "ثلاث باباجانی"
                ],
                [
                    "province_id"   =>   22,
                    "name"        =>   "جوانرود"
                ],
                [
                    "province_id"   =>   22,
                    "name"        =>   "دالاهو"
                ],
                [
                    "province_id"   =>   22,
                    "name"        =>   "سرپل ذهاب"
                ],
                [
                    "province_id"   =>   22,
                    "name"        =>   "سنقر"
                ],
                [
                    "province_id"   =>   22,
                    "name"        =>   "صحنه"
                ],
                [
                    "province_id"   =>   22,
                    "name"        =>   "قصرشیرین"
                ],
                [
                    "province_id"   =>   22,
                    "name"        =>   "کرمانشاه"
                ],
                [
                    "province_id"   =>   22,
                    "name"        =>   "کنگاور"
                ],
                [
                    "province_id"   =>   22,
                    "name"        =>   "گیلانغرب"
                ],
                [
                    "province_id"   =>   22,
                    "name"        =>   "هرسین"
                ],
                /************************************************************************/
                /*                                                                      */
                /*                                                                      */
                /*                                                                      */
                /*                                                                      */
                /*                                                                      */
                /*****************************   کهگیلویه‌و‌بویراحمد  *************************/
                [
                    "province_id"   =>   23,
                    "name"        =>   "باشت"
                ],
                [
                    "province_id"   =>   23,
                    "name"        =>   "بویراحمد"
                ],
                [
                    "province_id"   =>   23,
                    "name"        =>   "بهمئی"
                ],
                [
                    "province_id"   =>   23,
                    "name"        =>   "چرام"
                ],
                [
                    "province_id"   =>   23,
                    "name"        =>   "دنا"
                ],
                [
                    "province_id"   =>   23,
                    "name"        =>   "كهگیلویه"
                ],
                [
                    "province_id"   =>   23,
                    "name"        =>   "گچساران"
                ],
                [
                    "province_id"   =>   23,
                    "name"        =>   "لنده"
                ],
                /************************************************************************/
                /*                                                                      */
                /*                                                                      */
                /*                                                                      */
                /*                                                                      */
                /*                                                                      */
                /********************************   گلستان  ******************************/
                [
                    "province_id"   =>   24,
                    "name"        =>   "آزادشهر"
                ],
                [
                    "province_id"   =>   24,
                    "name"        =>   "آق قلا"
                ],
                [
                    "province_id"   =>   24,
                    "name"        =>   "بندرگز"
                ],
                [
                    "province_id"   =>   24,
                    "name"        =>   "تركمن"
                ],
                [
                    "province_id"   =>   24,
                    "name"        =>   "رامیان"
                ],
                [
                    "province_id"   =>   24,
                    "name"        =>   "علی آباد"
                ],
                [
                    "province_id"   =>   24,
                    "name"        =>   "كردكوئ"
                ],
                [
                    "province_id"   =>   24,
                    "name"        =>   "كلاله"
                ],
                [
                    "province_id"   =>   24,
                    "name"        =>   "كردكوئ"
                ],
                [
                    "province_id"   =>   24,
                    "name"        =>   "گمیشان"
                ],
                [
                    "province_id"   =>   24,
                    "name"        =>   "گرگان"
                ],
                [
                    "province_id"   =>   24,
                    "name"        =>   "گنبدكاووس"
                ],
                [
                    "province_id"   =>   24,
                    "name"        =>   "مراوه تپه"
                ],
                [
                    "province_id"   =>   24,
                    "name"        =>   "مینودشت"
                ],
                /************************************************************************/
                /*                                                                      */
                /*                                                                      */
                /*                                                                      */
                /*                                                                      */
                /*                                                                      */
                /********************************   گیلان   ******************************/
                [
                    "province_id"   =>   25,
                    "name"        =>   "املش"
                ],
                [
                    "province_id"   =>   25,
                    "name"        =>   "آستارا"
                ],
                [
                    "province_id"   =>   25,
                    "name"        =>   "آستانه اشرفیه"
                ],
                [
                    "province_id"   =>   25,
                    "name"        =>   "بندرانزلی"
                ],
                [
                    "province_id"   =>   25,
                    "name"        =>   "رشت"
                ],
                [
                    "province_id"   =>   25,
                    "name"        =>   "رضوانشهر"
                ],
                [
                    "province_id"   =>   25,
                    "name"        =>   "رودبار"
                ],
                [
                    "province_id"   =>   25,
                    "name"        =>   "رودسر"
                ],
                [
                    "province_id"   =>   25,
                    "name"        =>   "سیاهكل"
                ],
                [
                    "province_id"   =>   25,
                    "name"        =>   "شفت"
                ],
                [
                    "province_id"   =>   25,
                    "name"        =>   "صومعه سرا"
                ],
                [
                    "province_id"   =>   25,
                    "name"        =>   "طوالش"
                ],
                [
                    "province_id"   =>   25,
                    "name"        =>   "فومن"
                ],
                [
                    "province_id"   =>   25,
                    "name"        =>   "لاهیجان"
                ],
                [
                    "province_id"   =>   25,
                    "name"        =>   "لنگرود"
                ],
                [
                    "province_id"   =>   25,
                    "name"        =>   "ماسال"
                ],
                /************************************************************************/
                /*                                                                      */
                /*                                                                      */
                /*                                                                      */
                /*                                                                      */
                /*                                                                      */
                /*******************************   لرستان   ******************************/
                [
                    "province_id"   =>   26,
                    "name"        =>   "ازنا"
                ],
                [
                    "province_id"   =>   26,
                    "name"        =>   "الیگودرز"
                ],
                [
                    "province_id"   =>   26,
                    "name"        =>   "بروجرد"
                ],
                [
                    "province_id"   =>   26,
                    "name"        =>   "پلدختر"
                ],
                [
                    "province_id"   =>   26,
                    "name"        =>   "خرم آباد"
                ],
                [
                    "province_id"   =>   26,
                    "name"        =>   "دلفان"
                ],
                [
                    "province_id"   =>   26,
                    "name"        =>   "دورود"
                ],
                [
                    "province_id"   =>   26,
                    "name"        =>   "دوره"
                ],
                [
                    "province_id"   =>   26,
                    "name"        =>   "رومشکان"
                ],
                [
                    "province_id"   =>   26,
                    "name"        =>   "سلسله"
                ],
                [
                    "province_id"   =>   26,
                    "name"        =>   "کوهدشت"
                ],
                /************************************************************************/
                /*                                                                      */
                /*                                                                      */
                /*                                                                      */
                /*                                                                      */
                /*                                                                      */
                /******************************   مازندران   ******************************/
                [
                    "province_id"   =>   27,
                    "name"        =>   "آمل"
                ],
                [
                    "province_id"   =>   27,
                    "name"        =>   "بابل"
                ],
                [
                    "province_id"   =>   27,
                    "name"        =>   "بابلسر"
                ],
                [
                    "province_id"   =>   27,
                    "name"        =>   "بهشهر"
                ],
                [
                    "province_id"   =>   27,
                    "name"        =>   "تنكابن"
                ],
                [
                    "province_id"   =>   27,
                    "name"        =>   "جویبار"
                ],
                [
                    "province_id"   =>   27,
                    "name"        =>   "چالوس"
                ],
                [
                    "province_id"   =>   27,
                    "name"        =>   "رامسر"
                ],
                [
                    "province_id"   =>   27,
                    "name"        =>   "سارئ"
                ],
                [
                    "province_id"   =>   27,
                    "name"        =>   "سوادکوه شمالی"
                ],
                [
                    "province_id"   =>   27,
                    "name"        =>   "سوادكوه"
                ],
                [
                    "province_id"   =>   27,
                    "name"        =>   "سیمرغ"
                ],
                [
                    "province_id"   =>   27,
                    "name"        =>   "عباس آباد"
                ],
                [
                    "province_id"   =>   27,
                    "name"        =>   "فریدونكنار"
                ],
                [
                    "province_id"   =>   27,
                    "name"        =>   "قائم شهر"
                ],
                [
                    "province_id"   =>   27,
                    "name"        =>   "کلاردشت"
                ],
                [
                    "province_id"   =>   27,
                    "name"        =>   "گلوگاه"
                ],
                [
                    "province_id"   =>   27,
                    "name"        =>   "محمودآباد"
                ],
                [
                    "province_id"   =>   27,
                    "name"        =>   "میاندورود"
                ],
                [
                    "province_id"   =>   27,
                    "name"        =>   "نكا"
                ],
                [
                    "province_id"   =>   27,
                    "name"        =>   "نور"
                ],
                [
                    "province_id"   =>   27,
                    "name"        =>   "نوشهر"
                ],
                /************************************************************************/
                /*                                                                      */
                /*                                                                      */
                /*                                                                      */
                /*                                                                      */
                /*                                                                      */
                /******************************     مركزی   ******************************/
                [
                    "province_id"   =>   28,
                    "name"        =>   "اراک"
                ],
                [
                    "province_id"   =>   28,
                    "name"        =>   "آشتیان"
                ],
                [
                    "province_id"   =>   28,
                    "name"        =>   "تفرش"
                ],
                [
                    "province_id"   =>   28,
                    "name"        =>   "خمین"
                ],
                [
                    "province_id"   =>   28,
                    "name"        =>   "خنداب"
                ],
                [
                    "province_id"   =>   28,
                    "name"        =>   "دلیجان"
                ],
                [
                    "province_id"   =>   28,
                    "name"        =>   "زرندیه"
                ],
                [
                    "province_id"   =>   28,
                    "name"        =>   "ساوه"
                ],
                [
                    "province_id"   =>   28,
                    "name"        =>   "شازند"
                ],
                [
                    "province_id"   =>   28,
                    "name"        =>   "فراهان"
                ],
                [
                    "province_id"   =>   28,
                    "name"        =>   "کمیجان"
                ],
                [
                    "province_id"   =>   28,
                    "name"        =>   "محلات"
                ],
                /************************************************************************/
                /*                                                                      */
                /*                                                                      */
                /*                                                                      */
                /*                                                                      */
                /*                                                                      */
                /******************************     هرمزگان   ****************************/
                [
                    "province_id"   =>   29,
                    "name"        =>   "ابوموسی"
                ],
                [
                    "province_id"   =>   29,
                    "name"        =>   "بستك"
                ],
                [
                    "province_id"   =>   29,
                    "name"        =>   "بشاگرد"
                ],
                [
                    "province_id"   =>   29,
                    "name"        =>   "بندرعباس"
                ],
                [
                    "province_id"   =>   29,
                    "name"        =>   "بندرلنگه"
                ],
                [
                    "province_id"   =>   29,
                    "name"        =>   "پارسیان"
                ],
                [
                    "province_id"   =>   29,
                    "name"        =>   "جاسك"
                ],
                [
                    "province_id"   =>   29,
                    "name"        =>   "حاجی اباد"
                ],
                [
                    "province_id"   =>   29,
                    "name"        =>   "خمیر"
                ],
                [
                    "province_id"   =>   29,
                    "name"        =>   "رودان"
                ],
                [
                    "province_id"   =>   29,
                    "name"        =>   "سیریك"
                ],
                [
                    "province_id"   =>   29,
                    "name"        =>   "قشم"
                ],
                [
                    "province_id"   =>   29,
                    "name"        =>   "میناب"
                ],
                /************************************************************************/
                /*                                                                      */
                /*                                                                      */
                /*                                                                      */
                /*                                                                      */
                /*                                                                      */
                /******************************     همدان    ****************************/
                [
                    "province_id"   =>   30,
                    "name"        =>   "اسدآباد"
                ],
                [
                    "province_id"   =>   30,
                    "name"        =>   "بهار"
                ],
                [
                    "province_id"   =>   30,
                    "name"        =>   "تویسركان"
                ],
                [
                    "province_id"   =>   30,
                    "name"        =>   "رزن"
                ],
                [
                    "province_id"   =>   30,
                    "name"        =>   "فامنین"
                ],
                [
                    "province_id"   =>   30,
                    "name"        =>   "كبودرآهنگ"
                ],
                [
                    "province_id"   =>   30,
                    "name"        =>   "ملایر"
                ],
                [
                    "province_id"   =>   30,
                    "name"        =>   "نهاوند"
                ],
                [
                    "province_id"   =>   30,
                    "name"        =>   "همدان"
                ],
                /************************************************************************/
                /*                                                                      */
                /*                                                                      */
                /*                                                                      */
                /*                                                                      */
                /*                                                                      */
                /*******************************     یزد    ******************************/
                [
                    "province_id"   =>   31,
                    "name"        =>   "ابركوه"
                ],
                [
                    "province_id"   =>   31,
                    "name"        =>   "اردكان"
                ],
                [
                    "province_id"   =>   31,
                    "name"        =>   "اشکذر"
                ],
                [
                    "province_id"   =>   31,
                    "name"        =>   "بافق"
                ],
                [
                    "province_id"   =>   31,
                    "name"        =>   "بهاباد"
                ],
                [
                    "province_id"   =>   31,
                    "name"        =>   "تفت"
                ],
                [
                    "province_id"   =>   31,
                    "name"        =>   "خاتم"
                ],
                [
                    "province_id"   =>   31,
                    "name"        =>   "مهریز"
                ],
                [
                    "province_id"   =>   31,
                    "name"        =>   "میبد"
                ],
            ];
    }
}
