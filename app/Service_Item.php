<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Service_item extends Model
{
    protected $tabel = 'service_items';

    public function transaction(){
    	return $this->hasMany('App\Main_Transaction');
    }
    
    protected $fillable = [
		'serv_item_no',
		'serv_item',
		'act_price',
		'quantity_in',
		'quantity_out',
    ];
}
