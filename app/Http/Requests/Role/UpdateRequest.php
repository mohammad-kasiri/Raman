<?php

namespace App\Http\Requests\Role;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }


    public function rules()
    {
        return [
            'label'         => [ 'required' , 'max:100' , 'min:5'  ],
            'description'   => [ 'required' , 'max:100' , 'min:10' ],
            'permissions'   => [ 'required' , 'array'              ],
            'permissions.*' => [ 'required' , 'numeric'            ],
        ];
    }
}
