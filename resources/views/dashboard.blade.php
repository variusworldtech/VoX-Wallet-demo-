@extends('layouts.app')
@section('content')

<section id="content">
    <div class="breadcrumb">Dashboard</div>
    <div class="well" style="text-align:center"><span style="font-size:72px">{{ $balance }}</span> VoX</div>

    @if ($balance == 0)
     <a href="/deposit">Ready to play? Load some VoX now</a>
    @endif
    <div class="well">
    @if ($transactions->count() != 0)
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
    </div>

    </section>
@endsection