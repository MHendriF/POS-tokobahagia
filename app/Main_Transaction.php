<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Main_Transaction extends Model
{
    protected $table = 'main_transactions';

    public function pilihproduct(){
        return $this->belongsTo('App\Product', 'product_id');
    }
    
    protected $fillable = [
    	'user_id',
    	'product_id',
    	'description',
    	'transaction_date',
    	'unit_order',
    	'quantity_out',
    	'note',
    	'cost_price',
    ];
}
