<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Morilog\Jalali\Jalalian;

class UserSession extends Model
{
    use HasFactory;

    protected $fillable = ['device' , 'browser' , 'platform' , 'language' , 'ip_address' , 'city' , 'country' , 'isp' , 'timezone'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function created_at()
    {
        return Jalalian::forge($this->created_at)->format('%A, %d %B %Y');
    }
}
