<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class StudyField extends Model
{
    protected $fillable=['title'];

    public static function UpdateAutoComplete($study_field)
    {
        dd(10);
        static::query()->firstOrCreate(['title' => $study_field]);
    }
}
