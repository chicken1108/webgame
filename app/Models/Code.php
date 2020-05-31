<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Code extends Model
{
    protected  $table = 'codes';

    protected $fillable = [
    	'product_id','code'
    ];

    public function product(){
    	return $this->hasOne('\App\Models\Product','id','product_id');
    }
}
