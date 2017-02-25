<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ServiceStatus extends Model
{
    protected $tabel = 'service_statuses';

    public function transaction(){
        return $this->hasMany('App\Main_Transaction');
    }

    protected $fillable = [
        'status',
    ];
}
