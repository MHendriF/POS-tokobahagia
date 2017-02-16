<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Service_Status extends Model
{
    protected $tabel = 'service_status';

    public function transaction(){
    	return $this->hasMany('App\Main_Transaction');
    }

    protected $fillable = [
    	'status',
    ];
}
