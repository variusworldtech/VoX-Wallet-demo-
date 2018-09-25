@extends('layouts.app')
@section('content')

<section id="content">
    <div class="well" style="text-align:center">
            <?php $vwtSymbol = 'asdfasdf' ?>
        <span style="font-size:72px">{{ number_format ($balance, 2) }}</span> VoX
        <div class="pull-right">equivalent to $<span style="">{{ number_format ($balance, 2) }}, or £{{ number_format ($balance/1.3) }}</span></div>
    </div>

    <div class="well">
            @if ($balance == 0)
            <a href="/deposit">Ready to play? Load some VoX now</a>
           @endif
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
