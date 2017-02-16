<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Purchase_Order_Detail extends Model
{
    protected $table = 'purchase_order_details';

	public function pilihproduct(){
    	return $this->belongsTo('App\Product', 'product_id');
    }

    protected $fillable = [
     	'product_id',
		'po_item_number',
		'quantity_in',
		'quantity_out',
		'unit_cost',
		'line_total',
		'discount',
    ];
}
