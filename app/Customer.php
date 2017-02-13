<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
	protected $table = 'customers';

    public function product(){
    	return $this->hasMany('App\Product');
    }

    protected $fillable = [
        'contact_title',
		'contact_name',
		'phone',
		'fax',
		'address',
		'postal_code',
		'city',
		'province',
		'country',
		'billing_address',
		'additional_info',
    ];
}
