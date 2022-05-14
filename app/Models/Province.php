<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Province extends Model
{

    public function province()
    {
        return $this->belongsTo(Province::class, 'province_id');
    }

    public function patient()
    {
        return $this->hasMany(Patient::class);
    }

    public function scopeProvinces($query)
    {
        return $query->where('province_id' , '=' , null);
    }

    public function scopeCities($query)
    {
        return $query->where('province_id' , '!=' , null);
    }
}
