<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Purchase extends Model
{
    protected $table = 'purchases';

    public function pilihuser(){
    	return $this->belongsTo('App\User', 'user_id');
    }

	public function pilihsupplier(){
    	return $this->belongsTo('App\Supplier', 'supplier_id');
    }

    public function pilihshipping(){
        return $this->belongsTo('App\Shipping', 'shipping_id');
    }

    protected $fillable = [
        'user_id',
		'supplier_id',
		'shipping_id',
		'purchase_code',
		'po_description',
		'purchase_date',
		'promised_date',
		'shipping_date',
		'freight_charge',
        'price_total',
    ];

}
