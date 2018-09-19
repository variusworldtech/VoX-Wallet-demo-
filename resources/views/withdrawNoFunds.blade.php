@extends('layouts.app')
@section('content')

    <section id="content">
        <header class="content__header"><h1>Withdraw</h1>
            
        </header>

        <div class="card">
                        <div class="card__header">
                            <h2>You have insufficient funds in your account</h2>
                        </div>

                        <div class="card__body">
                            <p>To withdraw you must have funds in your account.</p>
                            <a href="/deposit" class="btn btn-default" role="button">Deposit</a>
                        </div>
        </div>
    </section>
@endsection