<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    Protected $fillable = [
    	'stripeToken', 'amount', 
    ];

    public function user(){
    	return $this->hasMany(Transaction::class, 'id', 'user_id');
    }
}
