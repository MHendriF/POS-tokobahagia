<?php

namespace App;

use Illuminate\Notifications\Notifiable;
//use Illuminate\Foundation\Auth\User as Authenticatable;
use Cartalyst\Sentinel\Users\EloquentUser;

//class User extends Authenticatable
class User extends EloquentUser
{
    use Notifiable;

    public function purchaseorder(){
        return $this->hasMany('App\Purchase_Order');
    }

    public function maintransaction(){
        return $this->hasMany('App\Main_Transaction');
    }

    protected $fillable = [
        'username',
        'last_name',
        'first_name',
        'phone',
        'address',
        //'email',
        'password',
        'permissions',
    ];


    protected $hidden = [
        'password', 'remember_token',
    ];
}
