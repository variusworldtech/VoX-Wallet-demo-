@extends('layouts.app')
@section('content')
    <section id="content">
    	<div class="well">
            <div class="container">
        
                
                <div class="row">
                        <h2>All transactions ({{ $balance }} VoX)</h2>

                        <p>Total number of transactions: {{ Auth::user()->transactions->count() }}</p>
                        @if (Auth::user()->transactions->count() == 0)
                            <p><a href="/deposit">Ready to play? Load some VoX now?</a></p>
                        @else
                    <div class="col-sm-8">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th scope="col">Date</th>
                                    <th scope="col">Amount</th>
                                    <th scope="col">Credit|Debit</th>
                                    <th scope="col">Payment mode</th>
                                </tr>
                            </thead>
                            <tbody>
                                    @foreach($transactions as $transaction)
                                    <tr>
                                        <td>{{ $transaction->created_at }} </td>
                                        <td>{{ $transaction->amount }} </td>
                                        <td>{{ $transaction->CreditOrDebit }} </td>
                                        <td>{{ $transaction->paymentMode }} </td>
                                    </tr>
                                    @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                @endif
            </div>
        </div>
        <a href="/reset" id="fixedreset"><img style="width:20px" src="{{ asset('img/reset.png')}}"></a>
    </section>
@endsection