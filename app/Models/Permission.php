<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Permission extends Model
{
    public $timestamps = false;
    //------------------------------------------    Relations    ------------------------------------------//
    public function roles()
    {
        return $this->belongsToMany(
            Role::class,
            'permission_role',
            'permission_id',
            'role_id');
    }

    public function children()
    {
        return $this->hasMany(Permission::class, 'parent')->with('children');
    }

    public function scopeHierarchy($query)
    {
        return $query->where('parent' , null)->with('children');
    }

}
