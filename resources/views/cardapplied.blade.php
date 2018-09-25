@extends('layouts.app')
@section('content')
    <section id="content">
    	<div class="well">
            
                Thank you for your application {{ $_POST['name'] }}. Your interest in the card is registered.<br><br> It will be posted as soon as we start printing them.
            
        </div>
    </section>
@endsection