<?php

namespace App\Models;

use App\Functions\Avatar;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Morilog\Jalali\Jalalian;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class User extends Authenticatable implements HasMedia
{
    use HasApiTokens, HasFactory, Notifiable, InteractsWithMedia;

    const PAGINATION_LIMIT = 20;
    const PROFILE_SESSION_LIMIT = 6;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'level',
        'gender',
        'first_name',
        'last_name',
        'mobile',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function roles()
    {
        return $this->belongsToMany(Role::class,
                                    'role_user',
                                    'user_id',
                                    'role_id');
    }

    public function socialMedias()
    {
        return $this->belongsToMany(SocialMedia::class,
                                    'social_media_user',
                                    'user_id',
                                    'social_media_id')
                    ->withPivot(['link' , 'is_active'])
                    ->as('socialMedia');
    }

    public function userSessions()
    {
        return $this->hasMany(UserSession::class);
    }

    public function patient()
    {
        return $this->hasOne(Patient::class);
    }

    public function doctor()
    {
        return $this->hasOne(Doctor::class);
    }

    public function getFullNameAttribute()
    {
        return $this->first_name . ' ' . $this->last_name;
    }

    public function scopePatients($query)
    {
        return $query->where('level', '=', 'patient');
    }

    public function scopeDoctors($query)
    {
        return $query->where('level', '=', 'doctor');
    }

    public function scopeAdmins($query)
    {
        return $query->where('level', '=', 'admin');
    }

    public function scopePatientsWithDetail($query)
    {
        return $query->where('level', '=', 'patient')->with('patient');
    }

    public function last_login()
    {
        return Jalalian::forge($this->last_login)->ago();
    }

    public function created_at()
    {
        return Jalalian::forge($this->created_at)->format('%A, %d %B %Y');
    }

    public function avatar($collection = 'avatar')
    {
        return  (strlen($this->getFirstMedia($collection)?->getUrl()) > 0
                &&
                file_exists( $this->getFirstMedia($collection)->getUrl()))
                ? $this->getFirstMedia($collection)->getUrl()
                : Avatar::{$this->gender}();
    }

    public function gender()
    {
        return $this->gender == 'male'
            ? 'آقا'
            : 'خانم';
    }


    public function genderIcon()
    {
        return $this->gender == 'male'
            ? asset("images/static/genders/male.png")
            : asset("images/static/genders/female.png");
    }

    public function hasRole($role): bool
    {
        if (is_string($role)) {
            return $this->roles->contains('label', $role);
        }
        return !!$role->intersect($this->roles)->count();
    }

    public function setAvatar()
    {
        if (request()->hasFile('avatar')) {
            $this->media()->delete();
            $this->addMediaFromRequest('avatar')
                ->toMediaCollection('avatar');
        }
    }
}
