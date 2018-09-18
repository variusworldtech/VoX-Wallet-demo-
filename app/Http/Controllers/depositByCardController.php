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

      $transaction = new Transaction();
      $transaction->amount = $amount;
      $transaction->stripeToken = $token;
      $transaction->CreditOrDebit = 'Credit';

      \Auth::user()->transactions()->save($transaction);

      return redirect('/dashboard');//->with(['msg', 'Payment successful, balance updated with ' . $amount . ' VoX.']);;
	}
}
