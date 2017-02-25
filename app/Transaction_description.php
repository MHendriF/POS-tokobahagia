<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaction_description extends Model
{
    protected $tabel = 'transaction_descriptions';

    protected $fillable = [
    	'description',
    	'code',
    ];
}
