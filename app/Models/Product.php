<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected  $table = 'product';

    protected $fillable = [
    	'name','cat_id','slug','image','price','price_sale','status','content'
    ];
    
    public function cat(){
    	return $this->hasOne('\App\Models\Category','id','cat_id');
    }
}
