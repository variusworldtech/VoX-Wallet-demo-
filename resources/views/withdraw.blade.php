@extends('layouts.app')
@section('content')

		<section id="content">
			<header class="content__header">
				<h1>Withdraw methods</h1>
			</header>
			<div id="content__grid" data-columns>

				<div class="card widget-pictures">
					<div class="card__header">
						<h2>Bank account
							<small>
								FEES: 0 GBP<br>
								Wait time: 0 - 2 hours
							</small>
						</h2>
					</div>
					<br/>
					<a href="/withdrawtobank" class="btn btn-sm btn-default" role="button">Withdraw to bank account</a>
				</div>
			</div>
		</section>
@endsection
