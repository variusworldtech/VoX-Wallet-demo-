<?php

namespace App\Http\Controllers;

use Request;
use App\Http\Controllers\Controller;
use App\Transaction;
use App\User;

// use Stripe\{Stripe, Charge, Customer};

class depositByCardController extends Controller
{	
	 /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    
	public function depositBycard(Request $request){

        // Transaction::create(Request::all());

      \Stripe\Stripe::setApiKey("sk_test_90tK1HVTR0dOQwtvw5sij0MB");

      // Token is created using Elements!
      // Get the payment token ID submitted by the form:
      $token = $_POST['stripeToken'];
      $amount = $_POST['amount'];

      $charge = \Stripe\Charge::create([
          'amount' => $amount,
          'currency' => 'usd',
          'description' => 'Transaction with VoX Wallet',
          'source' => $token,
          'capture' => false
      ]);

      $transac = new Transaction;



      $transac->user_id = \Auth::user()->id;
      $transac->amount = $amount;
      $transac->stripeToken = $token;
      $transac->CreditOrDebit = 'Credit';
      $transac->save();

      return ('Payment successfull.');
	}
}
