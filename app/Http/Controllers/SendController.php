<?php

namespace App\Http\Controllers;

use App\Transaction;
use App\User;

/**
* Custom controller class
*/
class SendController extends Controller
{
    //Private variable to store the user object.
    private $user;

    //Inject the $user module and store it in our private variable.
    public function __construct(User $user)
    {
        $this->user = $user;
    }

    public function index()
    {
    //Here is a Collection of all our users.
        $users = $this->user->all();

    //A custom twig template to display my list of users. Laravel Blade works much the same, IIRC.
        return \View::make('send')->with(['users' => $users]);
    }

    public function send()
    {
      $name = $_POST['name'];
      $email = $_POST['email'];
      $amount = $_POST['amount'];
      $connected_user_id = \Auth::user()->id;
      $user_id = $_POST['user_id'];
      //
      // var_dump($name);
      // var_dump($email);
      // var_dump($amount);
      // var_dump($connected_user_id);
      // var_dump($user_id);

        // Defines the message variable
        $message = "";
        $message2 = "";
        $type = "";
        $type2 = "";
        if (isset($_POST['amount'])) {
            //Get the mount from the post vars
            // $amount = $_POST['amount'];
            //Create new Transactions object for Send
            $transactionFrom = new Transaction();
            $transactionFrom->user_id = $connected_user_id;
            $transactionFrom->amount = $amount;
            $transactionFrom->stripeToken = '';
            $transactionFrom->CreditOrDebit = 'Debit';
            $transactionFrom->paymentMode = 'Peer Sent';
            //Create new Transactions object for recieve
            $transactionTo = new Transaction();
            $transactionTo->user_id = $user_id;
            $transactionTo->amount = $amount;
            $transactionFrom->stripeToken = '';
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
                \Auth::user()->where('id', $user_id)->first()->transactions()->save($transactionTo);
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
