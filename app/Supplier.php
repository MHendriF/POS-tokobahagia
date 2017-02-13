<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
	protected $tabel = 'suppliers';

    // public function order(){
    // 	return $this->hasMany('App\Order');
    // }

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
