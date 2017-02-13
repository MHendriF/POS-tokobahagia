<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
   	protected $table = 'orders';

    public function pilihcustomer(){
    	return $this->belongsTo('App\Customer', 'customer_id');
    }

    public function pilihshipping(){
        return $this->belongsTo('App\Shipping', 'shipping_id');
    }

    public function orderdetail(){
        return $this->hasOne('App\Order_Detail');
    }

    protected $fillable = [
        'customer_id',
        'shipping_id',
        'order_detail_id',
		'order_no',
        'order_date',
		'po_number',
		'freight_charge',
		'sales_tax_rate_po',
    ];

}
