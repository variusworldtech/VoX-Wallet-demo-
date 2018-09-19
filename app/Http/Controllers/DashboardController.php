<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Auth;

class DashboardController extends Controller
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
    public function index()
    {
        $allTransactions = \Auth::user()->transactions()->orderBy('created_at', 'desc')->get();

        $credits = $allTransactions->where('CreditOrDebit', 'Credit')->sum('amount');
        $debits = $allTransactions->where('CreditOrDebit', 'Debit')->sum('amount');
        $balance = $credits - $debits;

        $transactions = $allTransactions->take(5);

        return \View::make('dashboard')->with(compact('transactions', 'balance'));
    }
}
