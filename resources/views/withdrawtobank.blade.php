@extends('layouts.app')
@section('content')

		<section id="content">
			<header class="content__header">
				<h1>Withdrawing to bank account</h1>
			</header>
			<div id="content__grid" data-columns>
                <form action="/withdrawToBankAttempt" method="POST" id="withdrawToBankAttempt">
                    {{ csrf_field() }}


                    <div class="form-group">
                        <label for="name">Full name*</label>
                        <input type="text" class="form-control" id="name" value="{{Auth::user()->name}}" name="name" required>
                    </div>

                    <div class="row">
                        <div class="col-md-7">
                            <div class="form-group">
                                <label for="sortCode">Sort Code [eg 11-22-33]</label>
                                <input type="text" class="form-control" id="sortCode" name="sortCode" value="13-81-72" pattern="[0-9]{2}-[0-9]{2}-[0-9]{2}">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-7">
                            <div class="form-group">
                                <label for="sortCode">Account Number [eg 00112233]</label>
                                <input type="text" class="form-control" id="accountNumber" name="accountNumber" value="05641123" pattern="[0-9]{8}">
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