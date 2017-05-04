<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Finance extends Model
{
     protected $table = 'finance';
    
    protected $fillable = [
    	'keterangan',
    	'kredit',
    	'debit',
    	'created_date',
    ];
}
