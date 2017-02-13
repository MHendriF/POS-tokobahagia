<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Cartalyst\Sentinel\Roles\EloquentRole;

class Role_User extends Model
{
    protected $fillable = [
        'user_id',
        'role_id',
    ];
}
