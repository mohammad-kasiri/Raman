<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    use HasFactory;

    const MIN_PRICE_PER_MINUTE = 2500;

    protected $fillable = ['educational_background', 'working_background', 'bio', 'price_per_minute', 'is_visible', 'first_day_of_work'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function subjects()
    {
        return $this->belongsToMany(Subject::class, 'doctor_Subject', 'doctor_id', 'subject_id');
    }
}
