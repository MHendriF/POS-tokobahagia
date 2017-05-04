<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Expense extends Model
{
    protected $table = 'expense';
    
    protected $fillable = [
    	'listrik',
    	'air',
    	'makan',
    	'others',
    	'expense_total',
    ];
}
