<?php

namespace App\Http\Controllers;

use App\CardApplication;
use Illuminate\Http\Request;

class CardApplicationController extends Controller
{

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
        $cardApplication = new CardApplication;
        $cardApplication->name = $_POST['name'];
        $cardApplication->email = $_POST['email'];
        $cardApplication->save();

        return view('cardapplied');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\CardApplication  $cardApplication
     * @return \Illuminate\Http\Response
     */
    public function show(CardApplication $cardApplication)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\CardApplication  $cardApplication
     * @return \Illuminate\Http\Response
     */
    public function edit(CardApplication $cardApplication)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\CardApplication  $cardApplication
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CardApplication $cardApplication)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\CardApplication  $cardApplication
     * @return \Illuminate\Http\Response
     */
    public function destroy(CardApplication $cardApplication)
    {
        //
    }
}
