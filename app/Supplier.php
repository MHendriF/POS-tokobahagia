<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
	protected $tabel = 'suppliers';

    public function purchaseorder(){
    	return $this->hasMany('App\Purchase_Order');
    }

    protected $fillable = [
    	'supplier_name',
		'contact_title',
		'contact_name',
		'phone',
		'fax',
		'address',
		'postal_code',
		'city',
		'province',
		'country',
    ];

}
