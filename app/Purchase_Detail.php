<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Purchase_Detail extends Model
{
    protected $table = 'purchase_details';

	public function pilihproduct(){
    	return $this->belongsTo('App\Product', 'product_id');
    }

    public function purchase(){
        return $this->belongsTo('App\Purchase');
    }

    protected $fillable = [
     	'product_id',
		'number',
		'quantity',
		'price_per_unit',
		'discount',
		'price_total',
    ];
}