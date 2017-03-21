<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $table = 'services';

    public function pilihteknisi(){
    	return $this->belongsTo('App\Technician', 'technician_id');
    }

    public function pilihitem(){
    	return $this->belongsTo('App\Service_item', 'serv_item_id');
    }

    public function pilihstatus(){
        return $this->belongsTo('App\ServiceStatus', 'serv_status_id');
    }

    protected $fillable = [
    	'user_id',
        'technician_id',
		'serv_item_id',
		'serv_status_id',
		'cust_name',
		'cust_addr',
		'cust_phone',
		'entry_date',
		'item_desc',
		'item_serial',
		'item_damage',
		'item_images',
		'warranty',
		'collect_date',
		'tech_fee',
		'serv_fee',
		'trans_fee',
		'discount',
    ];
}
