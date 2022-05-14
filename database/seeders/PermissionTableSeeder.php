<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PermissionTableSeeder extends Seeder
{
     public function run()
    {
        foreach ($this->Permissions() as $data)
            DB::table('permissions')->insert([
                $data
            ]);
    }

    public function Permissions() : array
    {
        return  [

        ];
    }

    public function patientPermissions () : array
    {
        return [
            'id'   => 1 ,
            'name' => 'patients' ,
            'label'=> 'بیماران' ,
        ];
    }
}
