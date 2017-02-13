<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Technician extends Model
{
    protected $tabel = 'technicians';

    // public function order(){
    // 	return $this->hasMany('App\Order');
    // }

    protected $fillable = [
    	'technician_name',
    ];
}
