@extends('layouts.app')
@section('content')

		<section id="content">
			{{-- <header class="content__header">
				<h1>Withdraw methods</h1>
			</header> --}}
			<p>Withdraw</p>
			<div id="content__grid" data-columns>

					<div class="well">
						<h2>Bank account</h2>
							<small>
								FEES: 0 GBP<br>
								Wait time: 0 - 2 hours
							</small>
							<br/><br/>
							<a href="/withdrawtobank" class="btn btn-sm btn-default" role="button">Withdraw to bank account</a>
					</div>
					
				</div>
			</div>
		</section>
@endsection
