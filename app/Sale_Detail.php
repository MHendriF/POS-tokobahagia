<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sale_Detail extends Model
{
	protected $table = 'sale_details';

    public function pilihproduct(){
        return $this->belongsTo('App\Product', 'product_id');
    }

    protected $fillable = [
        'product_id',
        'quantity',
		'price_per_unit',
        'discount',
		'price_total',
		'price_ref',
    ];
}
