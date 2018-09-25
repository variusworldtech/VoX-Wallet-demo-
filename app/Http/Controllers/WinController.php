<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Auth;
use App\Transaction;
use App\User;

class WinController extends Controller
{
    public function stake()
    {
        $transaction = new Transaction();
        $transaction->amount = 50;
        $transaction->paymentMode = 'WinBerry STAKE';
        $transaction->stripeToken = '';
        $transaction->CreditOrDebit = 'Debit';

        \Auth::user()->transactions()->save($transaction);

        $win = rand(0,1);
        return redirect('dashboard?win='.$win);
    }

    public function win()
    {
        $transaction = new Transaction();
        $transaction->amount = 100;
        $transaction->paymentMode = 'WinBerry WIN';
        $transaction->stripeToken = '';
        $transaction->CreditOrDebit = 'Credit';

        \Auth::user()->transactions()->save($transaction);
      
        return redirect('dashboard');
    }
}
