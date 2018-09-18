<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    Protected $fillable = [
    	'stripeToken', 'amount', 
    ];

    public function user(){
    	return $this->belongsTo('App\User');
    }
}
