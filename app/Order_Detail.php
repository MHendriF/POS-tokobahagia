<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order_Detail extends Model
{
	protected $table = 'order_details';

    public function pilihproduct(){
        return $this->belongsTo('App\Product', 'product_id');
    }

    protected $fillable = [
        'product_id',
        'number',
        'quantity',
		'price_per_unit',
        'discount',
		'price_total',
		'price_ref',
    ];
}
