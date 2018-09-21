@extends('layouts.app')
@section('content')

<section id="content">
    <h1>Balance: {{ $balance }} VoX</h1>
   
    <br><br>

    @if ($balance <= 0)
     <a href="/deposit">Ready to play? Load some VoX now</a>
    @else
        <h2>Recent transactions</h2>

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

                    @foreach($transactions->take(5) as $transaction)
                    <tr>
                        <td>{{ $transaction->created_at }} </td>
                        <td>{{ $transaction->amount }} </td>
                        <td>{{ $transaction->CreditOrDebit }} </td>
                        <td>{{ $transaction->paymentMode }} </td>
                    </tr>
                    @endforeach
        </table>
        Total number of transactions: <a href="/transactions">{{ $transactions->count() }}</a>
    @endif

    </section>
@endsection