<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Inventory extends Model
{
    protected $table = 'inventory';

	public function pilihcategory(){
    	return $this->belongsTo('App\Category', 'category_id');
    }

    public function pilihlocation(){
        return $this->belongsTo('App\Location', 'location_id');
    }

    public function saledetail(){
    	return $this->hasMany('App\Sale_Detail');
    }

    public function maintransaction(){
    	return $this->hasMany('App\Main_Transaction');
    }

    protected $fillable = [
     	'category_id',
		'location_id',
		'product_name',
		'code_factory',
		'product_desc',
		'manufacturer',
		'item_function',
		'unit_price_min',
		'unit_price_max',
		'price_buy_avg',
		'images',
		'stock',
		'unit_of_measure',
     ];
}
