<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
   	protected $table = 'orders';

    public function pilihuser(){
        return $this->belongsTo('App\User', 'user_id');
    }
    
    public function pilihcustomer(){
    	return $this->belongsTo('App\Customer', 'customer_id');
    }

    public function pilihshipping(){
        return $this->belongsTo('App\Shipping', 'shipping_id');
    }

    public function orderdetail(){
        return $this->hasMany('App\Order_Detail');
    }

    protected $fillable = [
        'user_id',
        'customer_id',
        'shipping_id',
		'order_code',
        'shipping_date',
		'no_po_customer',
        'price_total',
		'description',
    ];

}