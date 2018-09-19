<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    Protected $fillable = [
    	'stripeToken', 'user_id', 'amount', 
    ];

    public function user(){
    	return $this->belongsTo('App\User', 'user_id');
    }
}
