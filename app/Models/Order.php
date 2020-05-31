<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
     protected  $table = 'orders';

     // protected $dateFormat = 'm/d/Y';
    protected $fillable = [
        'cus_id','amount','status','full_name','email','phone','note'
    ];
    public function details(){
        return $this->hasMany('\App\Models\OrderDetail','order_id','id');
    }
     public function cus(){
        return $this->hasOne('\App\Models\User','id','cus_id');
    }

    public function setDateAttribute( $value ) {
      $this->attributes['created_at'] = (new Carbon($value))->format('d/m/y');
    }
}
