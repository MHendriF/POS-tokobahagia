<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Salary extends Model
{
    protected $table = 'salaries';

    // public function one_employee(){
    //     return $this->hasOne('App\User', 'id');
    // }

    // public function oneemployee(){
    // 	return $this->hasOne('App\User', 'id');
    // }

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    protected $fillable = [
    	'user_id',
        'salary',
    ];
}
