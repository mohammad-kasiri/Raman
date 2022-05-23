<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SocialMedia extends Model
{
    protected $fillable = ['fa_title' , 'en_title' , 'font_awesome' , 'bootstrap_icon' , 'svg_icon'];

    public function socialMedias()
    {
        return $this->belongsToMany(User::class,
                                    'social_media_user',
                                    'social_media_id',
                                    'user_id')
                    ->withPivot(['link' , 'is_active']);
    }
}
