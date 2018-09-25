<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Auth;

class WithdrawToPaypalController extends Controller
{
    /**
     * Show the withdraw screen.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $transactions = \Auth::user()->transactions()->orderBy('created_at', 'desc')->get();

        $credits = $transactions->where('CreditOrDebit', 'Credit')->sum('amount');
        $debits = $transactions->where('CreditOrDebit', 'Debit')->sum('amount');
        $balance = $credits - $debits;

        return \View::make('withdrawtopaypal')->with(compact('balance'));
    }

    public function withdraw()
    {
      $transaction = new \App\Transaction();
      $transaction->amount = $_POST['voxAmount'];
      $transaction->stripeToken = '';
      $transaction->paymentMode = 'Withdraw to paypal ' . $_POST['email']; 
      $transaction->CreditOrDebit = 'Debit';

      \Auth::user()->transactions()->save($transaction);

        return redirect('dashboard');
    }
}
