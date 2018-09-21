@extends('layouts.app')
@section('content')
    <section id="content">
    	<div class="card">
            <div class="card__body">
                Thank you for your application {{ $_POST['name'] }}. Your card is in the post :)
            </div>
        </div>
    </section>
@endsection