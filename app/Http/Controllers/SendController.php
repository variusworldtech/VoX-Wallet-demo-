<?php

namespace App\Http\Controllers;

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
}
