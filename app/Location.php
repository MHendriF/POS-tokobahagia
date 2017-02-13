<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    protected $table = 'location';

    public function order(){
    	return $this->hasMany('App\Order');
    }
    
    protected $fillable = [
    	'location',
    ];
}
