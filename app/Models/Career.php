<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Career extends Model
{
    protected $fillable=['title'];

    public static function UpdateAutoComplete($career)
    {
        static::query()->firstOrCreate(['title' => $career]);
    }
}
