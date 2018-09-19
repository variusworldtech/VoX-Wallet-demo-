@extends('layouts.app')
@section('content')
    <section id="content">
    	<div class="card">
            <div class="card__body">
        
                    <h2>All transactions</h2>

                    <p>Total number of transactions: {{ Auth::user()->transactions->count() }}</p>
                    @if (Auth::user()->transactions->count() == 0)
                        <p><a href="/deposit">Ready to play? Load some VoX now?</a></p>
                    @else

                        <table class="table table-sm">
                                <thead>
                                <tr>
                                    <th scope="col">Date</th>
                                    <th scope="col">Amount</th>
                                    <th scope="col">Credit|Debit</th>
                                    <th scope="col">Payment mode</th>
                                </tr>
                                </thead>
                                <tbody>

                                    @foreach(Auth::user()->transactions as $transaction)
                                    <tr>
                                        <td>{{ $transaction->created_at }} </td>
                                        <td>{{ $transaction->amount }} </td>
                                        <td>{{ $transaction->CreditOrDebit }} </td>
                                        <td>{{ $transaction->paymentMode }} </td>
                                    </tr>
                                    @endforeach
                        </table>
                    @endif
            </div>
        </div>
    </section>
@endsection