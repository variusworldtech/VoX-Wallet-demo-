@extends('layouts.app')
@section('content')

		<section id="content">
                <div class="breadcrumb"><a href="/withdraw">Withdraw</a> > Withdraw to paypal</div>
			<div id="content__grid" data-columns>
                <form action="/withdrawToPayPalAttempt" method="POST" id="withdrawToPayPalAttempt">
                    {{ csrf_field() }}



                    <div class="row">
                        <div class="col-md-7">
                            <div class="form-group">
                                <label for="sortCode">Your paypal email address</label>
                                <input type="email" class="form-control" id="accountNumber" name="email" value="{{ Auth::user()->email }}">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                            <div class="col-md-7">
                                <div class="form-group">
                                    <label for="sortCode">Amount in VoX</label>
                                <input type="number" step="any" min="0.01" max="{{$balance}}" placeholder="{{$balance}}" class="form-control" id="voxAmount" name="voxAmount">
                                </div>
                            </div>
                        </div>

                    <button type="submit" class="btn btn-success">Withdraw now</button>
                </form>

			</div>
		</section>
@endsection