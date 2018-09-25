@extends('layouts.app')
@section('content')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
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
																		<div class="input-group">
																				<input type="number" step="any" min="0.01" max="{{$balance}}" placeholder="50" class="form-control" id="voxAmount" name="voxAmount">
																				<input type="hidden" value="{{$balance}}" id="userBalance">
																				<span class="input-group-btn">
																						<button id="withdrawMax" type="button" class="btn btn-default" style="padding:7.5px">Withdraw max</button>
																				</span>
																		</div>
                                </div>
                            </div>
                        </div>
                    <button type="submit" class="btn btn-primary">Withdraw now</button>
                </form>
			</div>
		</section>

		<script>
		  $(document).ready(function(){
		    $("#withdrawMax").click(function() {
					var balance = $("#userBalance").val();
					console.log("balance", balance);
		       $("#voxAmount").val(balance);
		    });
			});
		</script>
@endsection
