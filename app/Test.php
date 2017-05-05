<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Test extends Model
{
    protected $table = 'tests';

	public function pilihproduct(){
    	return $this->belongsTo('App\Inventory', 'product_id');
    }

    protected $fillable = [
     	'product_id',
		'no',
		'quantity',
		'price_per_unit',
		'discount',
		'price_total',
    ];
}
