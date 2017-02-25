<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Purchase_Order extends Model
{
    protected $table = 'purchase_orders';

    // public function pilihuser(){
    // 	return $this->belongsTo('App\User', 'supplier_id');
    // }

	public function pilihsupplier(){
    	return $this->belongsTo('App\Supplier', 'supplier_id');
    }

    public function pilihshipping(){
        return $this->belongsTo('App\Shipping', 'shipping_id');
    }

    public function podetail(){
        return $this->hasOne('App\Purchase_Order_Detail');
    }

    protected $fillable = [
		'supplier_id',
		'shipping_id',
		'po_detail_id',
		'po_number',
		'po_description',
		'order_date',
		'order_required',
		'order_promised',
		'ship_date',
		'freight_charge',
    ];
}
