<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $fillable = ['key', 'name'];

    protected $hidden = ['pivot'];

    public function users()
    {
        return $this->belongsToMany('App\Models\User', 'user_role');
    }

    public function permissions()
    {
        return $this->belongsToMany('App\Models\Permission', 'role_permission');
    }
}
