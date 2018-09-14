<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

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
    
	public function card(Request $request){


// $methods = Request::all();

    print_r($_POST);



    \Stripe\Stripe::setApiKey("sk_test_90tK1HVTR0dOQwtvw5sij0MB");

// Token is created using Checkout or Elements!
// Get the payment token ID submitted by the form:
    if(!isset($_POST)){
      $token = $_POST['stripeToken'];
      $charge = \Stripe\Charge::create([
          // 'amount' => 999,
          'currency' => 'usd',
          'description' => 'Example charge',
          'source' => $token
      ]);
    }

		/*\Stripe\Stripe::setApiKey("sk_test_90tK1HVTR0dOQwtvw5sij0MB");

		// Token is created using Checkout or Elements!
		// Get the payment token ID submitted by the form:
		$token = $_POST['stripeToken'];

		$charge = \Stripe\Charge::create([
	    'amount' => 100,
	    'currency' => 'gbp',
	    'description' => 'VWT - charge',
	    'source' => $token,
		]);*/

		/*\Stripe\Stripe::setApiKey("sk_test_90tK1HVTR0dOQwtvw5sij0MB");
		// Stripe::setApiKey(config('services.stripe.secret'));

		$customer = \Stripe\Customer::create([
			'email' => request('stripeEmail'),
			'source' => request('stripeToken')
		]);

		print_r($customer);
/*
		\Stripe\Stripe::setApiKey("sk_test_90tK1HVTR0dOQwtvw5sij0MB");
		 // get your logged in customer
           $customer = \Auth::User();

           // when client hit checkout button
           if( $request->isMethod('post') ) 
           {
                // stripe customer payment token
                $stripe_token = $request->get('stripe_token');

                // make sure that if we do not have customer token already
                // then we create nonce and save it to our database
                if ( !$customer->stripe_token ) 
                {
                      // once we received customer payment nonce
                      // we have to save this nonce to our customer table
                      // so that next time user does not need to enter his credit card details
                      $result = \Stripe\Customer::create([
                          "email"  => $customer->email,
                          "source" => $stripe_token
                      ]);

                      if( $result && $result->id )
                      {
                          // $client = new \stdClass();
                          $client->stripe_id = $result->id;
                          $client->stripe_token = $stripe_token;
                          $client->save();
                      }
                }

                if( $customer->stripe_token) 
                {
                    // charge customer with amount
                    $result = \Stripe\Charge::create([
                         "currency" => "gbp",
                         "customer" => $customer->stripe_id
                         // "amount"   => 200                                                 
                    ]);

                    // store transaction info for logs
                }             
           }*/

           return view('depositByCard');


				// Token is created using Checkout or Elements!
				// Get the payment token ID submitted by the form:
				/*$token = $_POST['stripeToken'];

				$charge = \Stripe\Charge::create([
				    'amount' => 999,
				    'currency' => 'usd',
				    'description' => 'Example charge',
				    'source' => $token,
				    'capture' => false,
				]);*/

						/*$charge = \Stripe\Charge::create ([
							'customer' => $customer->id,
				      		'amount'   => 5000,
				      		'currency' => 'usd'
				  		]);*/
 
		
	}

}
