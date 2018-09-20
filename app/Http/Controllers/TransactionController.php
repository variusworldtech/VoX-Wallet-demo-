<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Transaction;
use App\User;

class TransactionController extends Controller
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
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    public function Send()
    {
        //Defines the message variable
        $message = "";
        $message2 = "";
        $type = "";
        $type2 = "";
        if (isset($_POST['amount'])) {
            //Get the mount from the post vars
            $amount = $_POST['amount'];
            //Create new Transactions object for Send
            $transactionFrom = new Transaction();
            $transactionFrom->user_id = \Auth::user();
            $transactionFrom->amount = $amount;
            $transactionFrom ->stripeToken = "";
            $transactionFrom ->CreditOrDebit = 'Debit';
            $transactionFrom->paymentMode = 'Peer Sent';
            //Create new Transactions object for recieve
            $transactionTo = new Transaction();
            $transactionTo->user_id = $_POST['user_id'];
            $transactionTo->amount = $amount;
            $transactionTo->stripeToken = "";
            $transactionTo->CreditOrDebit = 'Credit';
            $transactionTo->paymentMode = 'Peer Sent';
            //Attepts to save new transaction to the transactions table
            try {
                \Auth::user()->transactions()->save($transactionFrom);
                $message .= "1) ";
                $message .= "Amount sent from: ";
                $message .= \Auth::user()->username;
                $message .= "<br>";
                $type .= "success";
            } catch (Exception $e) {
                //If unsuccessful add the error message to the var
                $message .= "1) ";
                $message .= $e->getMessage();
                $message .= "<br>";
                $type .= "danger";
            }
            try {
                \Auth::user()->transactions()->save($transactionTo);
                $message2 .= "2) ";
                $message2 .= "Amount recieved by: ";
                $message2 .= $transactionTo->user_id;
                $message2 .= "<br>";
                $type2 .= "success";
            } catch (Exception $e) {
                //If unsuccessful add the error message to the var
                $message2 .= "2) ";
                $message2 .= $e->getMessage();
                $message2 .= "<br>";
                $type2 .= "danger";
            }
        }
        if (isset($_POST['email'])) {
            $users = User::get();
        }
        return \View::make('send')->with(compact('message','message2', 'users', 'type', 'type2'));
    } 
}
