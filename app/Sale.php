<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sale extends Model
{
   	protected $table = 'sales';

    public function pilihcustomer(){
    	return $this->belongsTo('App\Customer', 'customer_id');
    }

    public function pilihshipping(){
        return $this->belongsTo('App\Shipping', 'shipping_id');
    }

    public function saledetail(){
        return $this->hasOne('App\Sale_Detail');
    }

    protected $fillable = [
        'customer_id',
        'shipping_id',
        'sale_detail_id',
		'sale_no',
        'shipping_date',
		'no_po_customer',
		'description',
    ];

}