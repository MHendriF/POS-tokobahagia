<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Cartalyst\Sentinel\Roles\EloquentRole;

class Role extends EloquentRole
{
     protected $fillable = [
        'name',
        'slug',
        'permissions',
    ];
}
