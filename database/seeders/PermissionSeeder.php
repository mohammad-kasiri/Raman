<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\DB;

class PermissionSeeder extends Seeder
{
     public function run()
    {
        foreach ($this->Permissions() as $data)
            DB::table('permissions')->insert($data);
    }

    public function Permissions() : array
    {
        return   Arr::collapse([
            $this->patientPermissions() ,
            $this->doctorPermissions()
        ]);
    }

    public function patientPermissions () : array
    {
        return [
            [
                'id'       => 1 ,
                'parent'   => null ,  // -- without parent -- //
                'name'     => 'patients' ,
                'label'    => 'بیماران'
            ],
            [
                'id'       => 2 ,
                'parent'   => 1 ,   //patients
                'name'     => 'patients.index' ,
                'label'    => 'مشاهده لیست بیماران'
            ],
            [
                'id'       => 3 ,
                'parent'   => 1 ,   //patients
                'name'     => 'patients.create' ,
                'label'    => 'افزودن بیمار جدید'
            ],
            [
                'id'       => 4 ,
                'parent'   => 1 ,   //patients
                'name'     => 'patients.show' ,
                'label'    => 'مشاهده ی اطلاعات بیمار'
            ],
            [
                'id'       => 5 ,
                'parent'   => 4 ,    //patients.show
                'name'     => 'patients.edit' ,
                'label'    => 'ویرایش اطلاعات بیمار'
            ],
            [
                'id'       => 6 ,
                'parent'   => 4 ,    //patients.show
                'name'     => 'patients.session.index' ,
                'label'    => 'نمایش لیست نشست های بیمار'
            ],

        ];
    }
    public function doctorPermissions () : array
    {
        return [
            [
                'id'       => 7 ,
                'parent'   => null ,  // -- without parent -- //
                'name'     => 'doctors' ,
                'label'    => 'پزشکان'
            ],
            [
                'id'       => 8 ,
                'parent'   => 7 ,   //doctors
                'name'     => 'doctors.index' ,
                'label'    => 'مشاهده لیست پزشکان'
            ],
            [
                'id'       => 9 ,
                'parent'   => 7 ,   //doctors
                'name'     => 'doctors.create' ,
                'label'    => 'افزودن پزشک جدید'
            ],
            [
                'id'       => 10 ,
                'parent'   => 7 ,   //doctors
                'name'     => 'doctors.show' ,
                'label'    => 'مشاهده ی اطلاعات پزشک'
            ],
            [
                'id'       => 11 ,
                'parent'   => 10 ,    //doctors.show
                'name'     => 'doctors.edit' ,
                'label'    => 'ویرایش اطلاعات پزشک'
            ],
            [
                'id'       => 12 ,
                'parent'   => 10 ,    //doctors.show
                'name'     => 'doctors.session.index' ,
                'label'    => 'نمایش لیست نشست های پزشک'
            ],

        ];
    }
}
