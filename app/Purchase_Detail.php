<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Purchase_Detail extends Model
{
    protected $table = 'purchase_details';

	public function pilihproduct(){
    	return $this->belongsTo('App\Inventory', 'product_id');
    }


    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function purchase()
    {
        return $this->belongsTo('App\Purchase');
    }

    public function inventory()
    {
        return $this->belongsTo('App\Inventory');
    }

    protected $guarded = [''];

  //   protected $fillable = [
  //    	'product_id',
  //       'purchase_id',
		// 'number',
		// 'quantity',
		// 'price_per_unit',
		// 'discount',
		// 'price',
  //   ];
}