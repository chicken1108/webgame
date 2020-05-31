<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    protected  $table = 'transaction_history';

    protected $fillable = [
    	'transaction_code','user','amount','condition',
    ];
    
    public function user(){
    	return $this->hasOne('\App\Models\User','id','user');
    }
}
