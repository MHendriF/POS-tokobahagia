<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    protected $table = 'locations';

    public function order(){
    	return $this->hasMany('App\Order');
    }
    
    protected $fillable = [
    	'location',
    ];
}
