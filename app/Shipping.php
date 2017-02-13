<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Shipping extends Model
{
    protected $tabel = 'shippings';

    public function order(){
    	return $this->hasMany('App\Order');
    }

    protected $fillable = [
    	'method',
    ];

}
