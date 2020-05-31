<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductSold extends Model
{
    protected  $table = 'product_sold';

    protected $fillable = [
    	'user_id','product','quantity', 'total', 'code',
    ];
    
    public function user(){
    	return $this->hasOne('\App\Models\User','id','user_id');
    }
}
