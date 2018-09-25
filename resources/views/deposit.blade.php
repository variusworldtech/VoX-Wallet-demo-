@extends('layouts.app')
@section('content')
    
    <section id="content">
        {{-- <header class="content__header">
            <h1>Deposit</h1> 
        </header> --}}
        <div class="well">
            @if(!isSet(Auth::user()->walletAddress))
                <form action="/depositsaveaddress" method="POST" id="depositsaveaddress">
                    {{ csrf_field() }}
                    <b>Your wallet address:</b> <input type="text" required pattern="^0x[a-fA-F0-9]{40}$" name="walletAddress" id="walletAddress" value="0x08d0c9a119626dab7d01330ca7e9789dc71e4158">
                    <input type="submit" value="Associate Wallet">
                </form>
            @else
                Wallet address: {{ Auth::user()->walletAddress }} 
            @endif
        </div>

        @if(isSet(Auth::user()->walletAddress))

        <div id="content__grid" data-columns>
            <div class="well">
                <h2>Manual Bank Transfer</h2><br/>
                
                <div class="well" style="padding:10px">
                    <p>Sort code: 77 - 16 - 14</p>
                    <p>Account #: 00042424</p>
                    <p>Reference: VWTPLAY1</p>
                </div>
                <p>Please allow 2 hours for Faster payments to complete.</p>
            </div>

            <div class="well">
                <div>
                    <h2>Credit and Debit card</h2>
                        <small>
                            FEES:<br>
                            0 GBP<br>
                        </small>
                    </h2>
                </div>
                <br/>
                <div>
                    <a href="/depositByCard" class="btn btn-primary" role="button">Load VoX now</a>
                </div>
            </div>
        </div>
        @endif
    </section>
@endsection
        