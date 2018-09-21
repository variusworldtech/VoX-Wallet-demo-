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
        $transactions = \Auth::user()->transactions()->orderBy('created_at', 'desc')->get();

        $credits = $transactions->where('CreditOrDebit', 'Credit')->sum('amount');
        $debits = $transactions->where('CreditOrDebit', 'Debit')->sum('amount');
        $balance = $credits - $debits;

        return \View::make('dashboard')->with(compact('transactions', 'balance'));
    }
}
