<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';

	public function pilihcategory(){
    	return $this->belongsTo('App\Category', 'category_id');
    }

    public function pilihlocation(){
        return $this->belongsTo('App\Location', 'location_id');
    }

    public function orderdetail(){
    	return $this->hasMany('App\Order_Detail');
    }

    public function maintransaction(){
    	return $this->hasMany('App\Main_Transaction');
    }

    protected $fillable = [
     	'category_id',
		'location_id',
		'product_name',
		'product_desc',
		'manufacturer',
		'item_use',
		'unit_price',
		'unit_price2',
		'avg_cost',
		'reorder_lvl',
		'discontinueted',
		'lead_time',
		'images',
		'pri_vendor',
		'sec_vendor',
		'unit_of_hand',
		'unit_of_measure',
     ];
}
