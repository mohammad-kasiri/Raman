<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Morilog\Jalali\Jalalian;

class Doctor extends Model
{
    use HasFactory;

    const MIN_PRICE_PER_MINUTE = 2500;
    const SEPRATOR_CHARACTOR   = '*';

    protected $fillable = ['educational_background', 'working_background', 'bio', 'price_per_minute', 'is_visible', 'first_day_of_work'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function subjects()
    {
        return $this->belongsToMany(Subject::class, 'doctor_subject', 'doctor_id', 'subject_id');
    }

    public function jalaliFirstDayOfWork()
    {
        return $this->first_day_of_work == null
            ? null
            : Jalalian::forge($this->birthdate)->format('Y/m/d');
    }

    public function firstDayOfWork()
    {
        return Jalalian::forge($this->first_day_of_work)->ago();
    }


}
