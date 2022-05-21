<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Degree extends Model
{
    protected $fillable=['title'];

    public static function UpdateAutoComplete($degree)
    {
        static::query()->firstOrCreate(['title' => $degree]);
    }
}
