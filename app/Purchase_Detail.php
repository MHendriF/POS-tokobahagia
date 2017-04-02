<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Purchase_Detail extends Model
{
    protected $table = 'purchase_details';

	public function pilihproduct(){
    	return $this->belongsTo('App\Product', 'product_id');
    }

    protected $fillable = [
     	'product_id',
		'po_no',
		'quantity',
		'price_per_unit',
		'discount',
		'price_total',
    ];
}