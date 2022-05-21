<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use Morilog\Jalali\Jalalian;

/**
 * @property null|string $marital_status
 * @property null|string $career
 */
class Patient extends Model
{
    use HasFactory;
    protected $fillable = ['career', 'city_id', 'address' , 'birthdate' ,'degree' , 'study_field', 'marital_status'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function city()
    {
        return $this->belongsTo(Province::class);
    }
    public function addressWithLimit($limit = 20)
    {
        return Str::limit($this->address, $limit, ' ...');
    }

    public function birthdate()
    {
        return Jalalian::forge($this->birthdate)->format('d - %B - Y');
    }

    public function birthdateDateTime()
    {
        return $this->birthdate == null
            ? null
            : Jalalian::forge($this->birthdate)->format('Y/m/d');
    }

    public function age()
    {
        return Jalalian::forge($this->birthdate)->ago();
    }

    public function livingCity()
    {
        return isset($this->city)
            ? $this->city->province->name . ' - ' . $this->city->name
            : 'وارد نشده';


    }
}
