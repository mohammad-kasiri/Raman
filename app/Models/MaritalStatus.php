<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MaritalStatus extends Model
{
    protected $fillable = ['title'];

    public static function UpdateAutoComplete($marital_status)
    {
        static::query()->firstOrCreate(['title' => $marital_status]);
    }
}
