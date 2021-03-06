<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'categories';

    public function category(){
    	return $this->hasMany('App\Category');
    }
    
    protected $fillable = [
    	'category_name',
    ];
}
