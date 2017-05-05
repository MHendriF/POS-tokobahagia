<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
	protected $table = 'customers';

    public function product(){
    	return $this->hasMany('App\Inventory');
    }

    protected $fillable = [
        'contact_title',
		'contact_name',
		'phone',
		'fax',
		'email',
		'address',
		'postal_code',
		'city',
		'province',
		'country',
		'billing_address',
		'additional_info',
    ];
}
