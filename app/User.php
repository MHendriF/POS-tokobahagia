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

    // public function salary(){
    //     return $this->hasOne('App\Salary');
    // }

    // public function roles()
    // {
    //     return $this->belongsToMany('App\Role_User', 'role_users', 'user_id', 'role_id');
    // }

    // public function hasAnyRole($roles)
    // {
    //     if (is_array($roles)){
    //         foreach ($roles as $role) {
    //             if($this->hasRole($role)){
    //                 return true;
    //             }
    //         }
    //     } else {
    //         if ($this->hasRole($roles)) {
    //             return true;
    //         }
    //     }
    // }

    // public function hasRole($role)
    // {
    //     if($this->roles()->where('name', $role)->first()){
    //         return true;
    //     }
    //     else 
    //         return false;
    // }

    protected $fillable = [
        'username',
        'last_name',
        'first_name',
        'phone',
        'address',
        //'email',
        'password',
        'jabatan',
        'permissions',
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];

}
