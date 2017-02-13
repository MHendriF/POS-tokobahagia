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
        'quantity_in',
        'quantity_out',
		'line_total',
        'discount',
		'grand_total',
		'price_ref',
    ];
}
