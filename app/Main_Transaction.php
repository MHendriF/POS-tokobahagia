<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Main_Transaction extends Model
{
    protected $table = 'main_transactions';

    public function pilihuser(){
        return $this->belongsTo('App\User', 'user_id');
    }

    public function pilihproduct(){
        return $this->belongsTo('App\Inventory', 'product_id');
    }

    public function pilihtransaksi(){
        return $this->belongsTo('App\Transaction_description', 'trans_desc_id');
    }    
    
    protected $fillable = [
    	'user_id',
    	'product_id',
        'trans_desc_id',
    	'description',
    	'transaction_date',
    	'unit_order',
    	'quantity_out',
    	'note',
    	'cost_price',
    ];
}
