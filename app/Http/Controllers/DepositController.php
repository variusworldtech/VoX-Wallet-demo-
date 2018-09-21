<?php

namespace App\Http\Controllers;

use App\CardApplication;
use Illuminate\Http\Request;

class DepositController extends Controller
{
    public function saveaddress(Request $request)
    {
        \Auth::user()->walletAddress = $_POST['walletAddress'];
        \Auth::user()->save();
        
        return redirect('deposit');
    }
}
