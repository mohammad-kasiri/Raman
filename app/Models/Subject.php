<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    protected $fillable=['title'];

    public $timestamps = false;

    public function doctors()
    {
        return $this->belongsToMany(Doctor::class,'doctor_subject','subject_id','doctor_id');
    }
}
