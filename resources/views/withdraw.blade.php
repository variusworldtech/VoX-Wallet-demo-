@extends('layouts.app')
@section('content')

		<section id="content">
			<div id="content__grid" data-columns>

					<div class="well">
						<h2>Withdraw to bank account</h2>
							<small>
								FEES: 0 GBP<br>
								Wait time: 0 - 2 hours
							</small>
							<br/><br/>
							<a href="/withdrawtobank" class="btn btn-sm btn-default" role="button">Withdraw to bank account</a>
					</div>

					<div class="well">
							<h2>Withdraw to paypal</h2>
								<br/><br/>
								<a style="background: lightblue" href="/withdrawtopaypal" class="btn btn-sm btn-default" role="button">Withdraw to paypal</a>
						</div>
					
				</div>
			</div>
		</section>
@endsection
